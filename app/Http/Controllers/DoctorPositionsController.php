<?php

namespace App\Http\Controllers;

use App\Models\DoctorPositions;
use App\Models\MedicalSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorPositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $query = DoctorPositions::query();

        // Check if search query exists
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('Enname', 'LIKE', "%$searchTerm%");
        }

        // Get paginated offers
        $doctorpositions = $query->latest()->paginate(20);
        $dropdownOptions = MedicalSpecialties::all();
        return view('admin.doctorpositions.index', compact('doctorpositions', 'dropdownOptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dropdownOptions = MedicalSpecialties::all();
        return view('admin.doctorpositions.create', compact('dropdownOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Enname' => 'required',
            'Arname' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            // 'Regcertificate' => 'required|mimes:pdf,jpg,png|max:2048',

        ]);
        // Store file information in the database
        $doctorpositions = new DoctorPositions();
        DoctorPositions::create($request->all());

        // return redirect()->route('doctorpositions.index')
        //     ->with('success', 'Doctor Postion created successfully.');
        return response()->json(['success' => true, 'message' => 'Doctor Postion created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(doctorpositions $doctorposition)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = MedicalSpecialties::all();

        // Return the view with the dropdown options
        return view('admin.doctorpositions.show', compact('doctorposition', 'dropdownOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorPositions $doctorposition)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = MedicalSpecialties::all();

        // Return the view with the dropdown options
        return view('admin.doctorpositions.edit', compact('doctorposition', 'dropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorPositions $doctorposition)
    {
        //
        $request->validate([
            'Enname' => 'required',
        ]);

        $doctorposition->update($request->all());

        return redirect()->route('doctorpositions.index')
            ->with('success', ' Doctor Position updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorPositions $doctorposition)
    {
        //
        $doctorposition->delete();

        return redirect()->route('doctorpositions.index')
            ->with('success', ' Doctor Position deleted successfully');
    }
}
