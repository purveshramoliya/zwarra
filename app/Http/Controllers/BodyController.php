<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BodyController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Check if there's a search query
        if ($search) {
            $bodys = Body::where('Enname', 'LIKE', "%{$search}%")
                ->orWhere('Arname', 'LIKE', "%{$search}%")
                ->get();
        } else {
            // If no search query, retrieve all records
            $bodys = Body::all();
        }

        return view('admin.body.index', compact('bodys'));
    }

    public function create()
    {
        return view('admin.body.create');
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Enname' => 'required|string',
            'Arname' => 'required|string',
            'mainservicetype' => 'required|array', // Validate that mainservicetype is an array
            'mainservicetype.*' => 'string', // Validate each value in the array
        ]);

        $logoPath = null;

        // Store the logo if provided
        if ($request->hasFile('Logo')) {
            $file = $request->file('Logo');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Unique file name
            $file->move(public_path('uploads'), $fileName); // Move the file to the uploads directory
            $logoPath = "/uploads/" . $fileName; // Set logo path for the database
        }

        // Create a new body record
        $body=Body::create([
            'Logo' => $logoPath, // Save the logo path
            'Enname' => $request->Enname,
            'Arname' => $request->Arname,
            'Endescription' => $request->Endescription,
            'Ardescription' => $request->Ardescription,
            'service' => $request->service,
            'mainservicetype' => implode(',', $request->mainservicetype), // Convert array to comma-separated string
            'servicetype' => $request->servicetype,
            'packages' => $request->packages,
            'Single' => $request->Single,
            'status' => 1, // Convert to integer
        ]);
        // Redirect or return a response
        return redirect()->route('admin.body')->with('success', 'Body saved successfully!');
    }
    public function updatestatus(Request $request)
    {
        $id = $request->input('id');
        $updatestatus = Body::findOrFail($id);
    
        // Determine the new status from the checkbox value
        $updatestatus->status = $request->input('status') === 'true' ? 1 : 0;
        $updatestatus->save();
    
        // Respond with JSON
        return response()->json(['success' => true]);
    }
    
}
