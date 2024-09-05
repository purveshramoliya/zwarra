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
            'zone_id' => 'required|integer',
        ]);

        // Fetch the zone based on the provided parameters
        $zone = Zone::where('country_id', $countryId)
                    ->where('city_id', $cityId)
                    ->where('zone_id', $zoneId)
                    ->where('Healthcareid', 0)
                    ->first();

        if ($zone) {
            return response()->json([
                'coordinates' => $zone->coordinates,
                'shape_type' => $zone->shape_type,
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
        $countries = Country::all();

        // Pass the necessary data to the view
        return view('healthcare.zones.index', compact('zones', 'countries'));
    }



    public function locations(Request $request)
    {
        $id = Auth::guard('serviceprovider')->id();
        $countries = Country::all();
        $cities = City::all();

        return view('healthcare.locations.index', compact('countries','cities','id'));
    }

     public function hgetRectangles(Request $request) {
    // Assuming you have a Rectangle model with a 'coordinates' field
        $id = Auth::guard('serviceprovider')->id();
        Log::info('User r before save: ' . $id);
        if($id)
        {$zones = Zone::where('Healthcareid', $id)->get();}
        else{$zones = zone::all();} 
        Log::info('User r after save: ' . $id);  
    
       return response()->json($zones);
    }

    public function hsaveZonemap(Request $request)
    {
        $request->validate([
           // 'Healthcareid' => 'required|integer',
            'country_id' => 'required',
            'city_id' => 'required',
            'zone_id' => 'required',
            // 'shape_type' => 'required',
            // 'coordinates' => 'required', // Adjust validation as per your needs
        ]);


        // Save the shape data to the database
        $coordinatesString = $request->input('coordinates');

    $cleanedCoordinatesString = str_replace('"', '', $coordinatesString);

    // Decode and re-encode to ensure it's valid JSON
    $coordinates = json_decode($cleanedCoordinatesString, true);
        $shape = Zone::create([
            'Healthcareid' => Auth::guard('serviceprovider')->id(),
            'country_id' => $request->input('country_id'),
            'city_id' => $request->input('city_id'),
            'zone_id' => $request->input('zone_id'),
            'shape_type' => $request->input('shape_type'),
            'coordinates' =>json_encode($coordinates), // Store coordinates as JSON string
        ]);
// print_r(json_encode($request->input('coordinates')));
        // Optionally return response if needed
        return response()->json(['message' => 'zone saved successfully', 'shape' => $shape]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
       $zone->delete();
       return redirect()->route('zone.zonelist')->with('success',' Zone deleted successfully');
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
        if($status == 'true'){
            $status = 1;
        }else{
            $status = 0;
        }
        $updatestatus->Status = $status;
        $updatestatus->save();

        // Respond with JSON
        return response()->json(['success' => true]);
    }

}
