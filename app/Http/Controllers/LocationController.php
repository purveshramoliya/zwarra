<?php

// app/Http/Controllers/LocationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Zones;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('id');
        $countries = Country::all();
        $cities = City::all();

        return view('admin.locations.index', compact('countries','cities','id'));
    }


    public function getCitiesByCountry($country_id)
    {
        $cities = City::where('country_id', $country_id)->get();
        return response()->json($cities);
    }

    public function getZonesByCity($city_id)
    {
        $zones = Zones::where('city_id', $city_id)->get();
        return response()->json($zones);
    }

    public function getCities(Request $request)
    {
        $countryId = $request->input('country_id');
        $cities = City::where('country_id', $countryId)->get();

        return response()->json(['cities' => $cities]);
    }

    public function storeCountry(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string|max:255',
        ]);

        $country = Country::create(['name' => $request->country_name]);

        return response()->json($country);
    }

    public function storeCity(Request $request)
    {
        $request->validate([
            'city_name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        // Split the value to get country_id and country_name
        list($country_id, $country_name) = explode(':', $request->country_id);

        $city = City::create([
            'name' => $request->city_name,
            'country_id' => $country_id,
            'countryname' => $country_name, // Store country name
        ]);

        return response()->json($city);
    }

    // app/Http/Controllers/LocationController.php

    public function storeZone(Request $request)
    {
        $request->validate([
            'zone_name' => 'required|string|max:255',
            'country_id' => 'required',
            'city_id' => 'required',
        ]);

        // Split the country and city values to get their respective ids and names
        list($country_id, $country_name) = explode(':', $request->country_id);
        list($city_id, $city_name) = explode(':', $request->city_id);

        $zones = Zones::create([
            'name' => $request->zone_name,
            'country_id' => $country_id,
            'country_name' => $country_name,
            'city_id' => $city_id,
            'city_name' => $city_name,
        ]);

        return response()->json($zones);
    }
}

