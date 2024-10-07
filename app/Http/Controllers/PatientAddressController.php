<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientAddress;

class PatientAddressController extends Controller
{
    /**
     * Store a newly created address in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Userid' => 'required|integer',
            'Name' => 'nullable|string|max:255',
            'Address' => 'nullable|string',
        ]);

        $address = PatientAddress::create($request->all());

        return response()->json($address, 201);
    }

    /**
     * Update the specified address in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'Name' => 'nullable|string|max:255',
            'Address' => 'nullable|string',
        ]);

        // Find the address by ID
        $address = PatientAddress::find($id);

        // Check if the address exists
        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }

        // Update the address with validated data
        $address->update($request->only(['Name', 'Address']));

        return response()->json($address, 200);
    }


     /**
     * Display a listing of the addresses where Userid matches.
     */
    public function GetAddressByUserid($userid)
    {
        $addresses = PatientAddress::where('Userid', $userid)->get();

        if ($addresses->isEmpty()) {
            return response()->json(['message' => 'No addresses found for the given Userid'], 404);
        }

        return response()->json($addresses, 200);
    }

    /**
     * Remove the specified address from storage.
     */
    public function destroy($id)
    {
        $address = PatientAddress::find($id);

        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }

        $address->delete();

        return response()->json(['message' => 'Address deleted successfully'], 200);
    }
}
