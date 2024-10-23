<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HealthcareZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchCoordinates(Request $request)
    {
        $countryId = $request->query('country_id');
        $cityId = $request->query('city_id');
        $zoneId = $request->query('zone_id');

        // Validate the inputs
        $validated = $request->validate([
            'country_id' => 'required|integer',
            'city_id' => 'required|integer',
            'zone_id' => 'required|string', // Adjust according to your database schema
        ]);
        $id = Auth::guard('serviceprovider')->id();

        // Fetch the zone based on the provided parameters
        $zone = Zone::where('country_id', $countryId)
            ->where('city_id', $cityId)
            ->where('Enname', $zoneId)
            ->where('Healthcareid', $id)
            ->first();
        if ($zone) {
            return response()->json([
                'coordinates' => json_decode($zone->coordinates), // Ensure the coordinates are decoded if they are stored as JSON
                'shape_type' => 'Polygon' // Adjust shape type as needed
            ]);
        } else {
            return response()->json(['error' => 'No matching zone found'], 404);
        }
    }
    public function index(Request $request)
    {
        // Ensure the user is authenticated using the specified guard
        $id = Auth::guard('serviceprovider')->id();

        // Debugging: Check if the user object is retrieved
        if ($id) {
            // Retrieve zones based on Healthcareid
            $zones = Zone::where('Healthcareid', $id)->get();
        } else {
            // If no user is authenticated, retrieve all zones
            $zones = Zone::all();
        }

        // Retrieve all countries
        $zoness = Zone::where('Healthcareid', 0)->get();
        $countries = Country::all();
        $cities = City::all();

        // Pass the necessary data to the view
        return view('healthcare.zones.index', compact('zones', 'zoness', 'countries', 'cities'));
    }



    public function locations(Request $request)
    {
        $id = Auth::guard('serviceprovider')->id();
        $countries = Country::all();
        $cities = City::all();

        return view('healthcare.locations.index', compact('countries', 'cities', 'id'));
    }

    public function hgetRectangles(Request $request)
    {
        // Get the ID of the authenticated service provider
        $id = Auth::guard('serviceprovider')->id();
        Log::info('User ID before retrieval: ' . $id);

        if ($id) {
            // Retrieve zones for the authenticated user with Status 1
            $zones = Zone::where('Healthcareid', $id)->where('Status', 1)->get();
        } else {
            // Retrieve all zones with Status 1
            $zones = Zone::where('Status', 1)->get();
        }

        Log::info('User ID after retrieval: ' . $id);

        return response()->json($zones);
    }
    public function hsaveZonemap(Request $request)
    {
        // Get the array of selected zone IDs
        $zoneIds = $request->input('zone_id');

        // Check if any zones were selected
        if (empty($zoneIds)) {
            return response()->json(['error' => 'No zones selected.'], 400);
        }

        $savedZones = [];
        $duplicateZones = []; // Array to hold names of existing zones

        // Retrieve zones with Healthcareid = 0 for the selected zone IDs
        $zones = Zone::where('Healthcareid', 0)
            ->where('country_id', $request->input('country_id'))
            ->where('city_id', $request->input('city_id'))
            ->whereIn('Enname', $zoneIds) // Filter by selected zone IDs
            ->get();

        // Check if any zones were found
        if ($zones->isEmpty()) {
            return response()->json(['error' => 'No valid zones found.'], 404);
        }

        // Check for existing zones before trying to insert
        foreach ($zones as $zoneData) {
            // Check if the zone already exists for this Healthcare ID
            $exists = Zone::where('country_id', $request->input('country_id'))
                ->where('city_id', $request->input('city_id'))
                ->where('Enname', $zoneData->Enname) // Use the retrieved zone name
                ->where('Healthcareid', Auth::guard('serviceprovider')->id())
                ->exists();

            if ($exists) {
                $duplicateZones[] = $zoneData->Enname; // Add to duplicates array
            }
        }

        // If there are duplicates, return them without inserting new zones
        if (!empty($duplicateZones)) {
            return response()->json(['error' => 'The following zones already exist: ' . implode(', ', $duplicateZones)], 409);
        }

        // Proceed to save zones only if no duplicates were found
        foreach ($zones as $zoneData) {
            // Decode and prepare coordinates
            $coordinatesString = $zoneData->coordinates;
            $cleanedCoordinatesString = str_replace('"', '', $coordinatesString);
            $coordinates = json_decode($cleanedCoordinatesString, true);

            // Create the new zone entry with the Arabic name
            $shape = Zone::create([
                'Healthcareid' => Auth::guard('serviceprovider')->id(),
                'country_id' => $request->input('country_id'),
                'city_id' => $request->input('city_id'),
                'Enname' => $zoneData->Enname, // Use the zone name
                'Arname' => $zoneData->Arname, // Get the Arabic name
                'shape_type' => $zoneData->shape_type,
                'coordinates' => json_encode($coordinates), // Store coordinates as JSON string
                'Status' => 1
            ]);
            $savedZones[] = $shape; // Keep track of saved shapes
        }

        return response()->json(['success' => 'Zones saved successfully', 'shapes' => $savedZones]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone = Zone::find($id);

        if (!$zone) {
            return redirect()->back()->with('error', 'Zone not found.');
        }

        $zone->delete();

        return redirect()->back()->with('success', 'Zone deleted successfully.');
    }


    public function updatestatus(Request $request)
    {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = Zone::findOrFail($id); // Change 'user_id' to the actual field name

        // Update status logic here
        $status = $request->input('status');

        // Update the status in the database
        //$updatestatus->update(['Status' => $status]);
        if ($status == 'true') {
            $status = 1;
        } else {
            $status = 0;
        }
        $updatestatus->Status = $status;
        $updatestatus->save();

        // Respond with JSON
        return response()->json(['success' => true]);
    }
    public function getZones(Request $request)
    {
        $cityId = $request->input('city_id');
        $zones = Zone::where('city_id', $cityId)
            ->where('Healthcareid', 0)
            ->get(); // Adjust the query as needed

        return response()->json($zones);
    }
}
