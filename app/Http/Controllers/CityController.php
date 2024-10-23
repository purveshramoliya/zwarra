<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City; // Assuming you have a City model
use App\Models\Country; // Assuming you also want to reference countries
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
   
    // In your controller
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'Enname' => 'required|string',
            'Arname' => 'required|string',
            'Arcityname' => 'required|string',
            'Encityname' => 'required|string|unique:cities,name',
            'coordinates' => 'required|json',
        ], [
            'Enname.required' => 'The English country name is required.',
            'Enname.string' => 'The English country name must be a string.',
            
            'Arname.required' => 'The Arabic country name is required.',
            'Arname.string' => 'The Arabic country name must be a string.',
            
            'Arcityname.required' => 'The Arabic city name is required.',
            'Arcityname.string' => 'The Arabic city name must be a string.',
            
            'Encityname.required' => 'The English city name is required.',
            'Encityname.string' => 'The English city name must be a string.',
            'coordinates.required' => 'Please select city',
            'Encityname.unique' => 'City Is Already Selected',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get and decode the coordinates
        $jsonCoordinates = $request->input('coordinates'); // e.g., "[[72.96308573008852,21.284427731340998]]"
        $coordinatesArray = json_decode($jsonCoordinates, true);

        // Check if decoding was successful
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Invalid coordinates format'], 400);
        }

        // Insert the city into the database
        City::create([
            'country_id' => $request->Enname,
            'name' => $request->Encityname,
            'Arcityname' => $request->Arcityname,
            'coordinates' => json_encode($coordinatesArray), // Convert back to JSON for storage
        ]);

        return redirect()->route('zone.zonelist')->with('success', 'City created successfully!');
    }

    public function getRectanglesCity()
    {
        $cities = City::all(['id', 'country_id', 'name', 'Arcityname', 'coordinates']); // Select necessary fields
        return response()->json($cities);
    }
}
