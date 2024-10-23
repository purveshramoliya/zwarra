<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Enname' => 'required|string|unique:countries',
            'Arname' => 'required|string',
            'coordinates' => 'required|json',
        ]);

        Country::create($request->all());

        return redirect()->route('zone.zonelist')->with('success', 'Country created successfully!');
    }

    public function fetch()
    {
        $countries = Country::all();
        return response()->json($countries);
    }
    public function saveCountrymap(Request $request)
    {
        // Validate the request data
        $request->validate([
            'Enname' => 'required|string',
            'Arname' => 'required|string',
        ]);

        // Proceed to save the shape data to the database
        $shape = Country::create([
            'Enname' => $request->input('Enname'),
            'Arname' => $request->input('Arname'),
            'shapeType' => $request->input('shapeType'),
            'coordinates' => json_encode($request->input('coordinates')), // Store coordinates as JSON string
        ]);
        return response()->json([
            'success' => 'Country saved successfully',
            'shape' => $shape,
            'redirect' => route('zone.zonelist') // Add the redirect route here
        ]);
    }
    public function getRectanglesCountry()
    {
        // Retrieve necessary fields, including coordinates for centering
        $countries = Country::all(['id', 'Enname', 'shapeType', 'coordinates']);

        // Optional: Calculate average coordinates to center the map
        $centerCoordinates = $countries->pluck('coordinates')->filter()->map(function ($coords) {
            return json_decode($coords);
        });

        // Assuming you want the first valid coordinates to center the map
        $initialCenter = $centerCoordinates->first() ?? [0, 0]; // Fallback to [0, 0] if none found

        return response()->json([
            'countries' => $countries,
            'initialCenter' => $initialCenter
        ]);
    }
    public function getCountryCoordinates($id)
    {
        // Fetch the country by ID
        $country = Country::find($id, ['coordinates']); // Adjust field names as necessary

        // Check if the country exists and has coordinates
        if ($country && $country->coordinates) {
            // Decode the coordinates
            $coordinates = json_decode($country->coordinates);

            // If the coordinates are in a nested array, flatten them
            if (is_array($coordinates) && count($coordinates) > 0) {
                return response()->json(['coordinates' => $coordinates[0]]);
            }
        }

        return response()->json(['coordinates' => null], 404); // Not found
    }
}
