<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->query('id');
        if($id){
        $zones = Zone::where('Healthcareid', $id)->get();
        }else{
            $zones = Zone::where('Healthcareid', 0)->get();
        }
        
        $countries = Country::all();

        return view('admin.zones.index', compact('zones','countries','id'));
    }

    public function zonelist(Request $request)
    {
        $id = $request->query('id');
         if ($id) {
            $zones = Zone::where('Healthcareid', $id)
                ->with(['country', 'city','serviceprovider'])
                ->get();
        } else {
            $zones = Zone::with(['country', 'city','serviceprovider'])->get();
        }

        return view('admin.zones.zonelist', compact('zones','id'));
    }

  
    public function getRectangles(Request $request) {
         Log::info('User r before save: ' . Auth::id());

    // Assuming you have a Rectangle model with a 'coordinates' field
        $id = $request->query('id');
        if($id)
        {$zones = Zone::where('Healthcareid', $id)->get();}
        else{$zones = zone::all();} 
        Log::info('User r after save id: ' . $id);
    
       return response()->json($zones);
        
    }

    public function saveZonemap(Request $request)
    {
        // Validate the request data
        $request->validate([
            'country_id' => 'required',    // Ensure country_id is required
            'city_id' => 'required',
            'zone_id' => 'required',
            'shape_type' => 'required',
            'coordinates' => 'required',
        ], [
            'country_id.required' => 'Please select a country.',  // Custom error message for country_id
        ]);

        // Check if country_id is null
        if (is_null($request->input('country_id'))) {
            // Return response indicating error
            return response()->json(['error' => 'Please select a country.'], 400);
        }
        // Check if the zone already exists
        $existingZone = Zone::where('country_id', $request->input('country_id'))
            ->where('city_id', $request->input('city_id'))
            ->where('zone_id', $request->input('zone_id'))
            ->where('Healthcareid',0)
            ->first();

        if ($existingZone) {
            return response()->json(['error' => 'Zone already exists.'], 409);
        }
        // Proceed to save the shape data to the database
        $shape = Zone::create([
            'Healthcareid' => $request->input('healthcare_id'),
            'country_id' => $request->input('country_id'),
            'city_id' => $request->input('city_id'),
            'zone_id' => $request->input('zone_id'),
            'shape_type' => $request->input('shape_type'),
            'Status' => 1,
            'coordinates' => json_encode($request->input('coordinates')), // Store coordinates as JSON string
        ]);

        // Log the user ID after save
        Log::info('User after save: ' . Auth::guard('web')->id());

        // Return success response with saved shape data
        return response()->json(['success' => 'Zone saved successfully', 'shape' => $shape]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        //
     $request->validate([
        'Enname' => 'required',
    ]);

     $zone->update($request->all());

     return redirect()->route('zone.index')
     ->with('success','Zone updated successfully');
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

    public function fetchZoneData($latitude, $longitude)
    {
        $latitude = (float) $latitude; // Convert to float if necessary
        $longitude = (float) $longitude; // Convert to float if necessary
        
        // Query the zones where coordinates match the given latitude and longitude
        $zones = Zone::whereJsonContains('coordinates', [[$longitude, $latitude]]) // [[$lng, $lat]] because longitude comes first
                     ->get();

        return response()->json($zones);
    }
}
