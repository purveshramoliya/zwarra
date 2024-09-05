<?php

namespace App\Http\Controllers;

use App\Models\SubMedicalSpecialties;
use App\Models\MedicalSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubMedicalSpecialtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
    $query = SubMedicalSpecialties::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('Enname', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $submedicalspecialties = $query->latest()->paginate(20);

    return view('admin.submedicalspecialties.index', compact('submedicalspecialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // Retrieve dropdown options from the database
        $dropdownOptions = MedicalSpecialties::all();

    // Return the view with the dropdown options
        return view('admin.submedicalspecialties.create', compact('dropdownOptions'));
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
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            //'Logo' => 'required|mimes:jpg,png|max:2048',

        ]);

         // Extracting ID and Enname from the selected option
        $selectedOption = explode(':', $request->input('Enspecialties'));
        $msid = $selectedOption[0];
        $msname = $selectedOption[1];

         // Store file information in the database
         $submedicalspecialties = new SubMedicalSpecialties();
         $submedicalspecialties->Enname = $request->input('Enname');
         $submedicalspecialties->Arname = $request->input('Arname');
         $submedicalspecialties->Enspecialties = $msid;
         $submedicalspecialties->Medicalspec = $msname;
         $submedicalspecialties->Arspecialties = $request->input('Arspecialties');
         $submedicalspecialties->Status = $request->input('Status');

        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $submedicalspecialties->Logo =  "/uploads/".$fileName;
         }

         $submedicalspecialties->save();
     
        return redirect()->route('submedicalspecialties.index')
                        ->with('success',' Sub Medical Specialties created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(SubMedicalSpecialties $submedicalspecialty)
    {
        
        // Retrieve dropdown options from the database
        $dropdownOptions = MedicalSpecialties::all();

       // Return the view with the dropdown options
        return view('admin.submedicalspecialties.show', compact('submedicalspecialty','dropdownOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(SubMedicalSpecialties $submedicalspecialty)
    {
         // Retrieve dropdown options from the database
         $dropdownOptions = MedicalSpecialties::all();

         // Return the view with the dropdown options
         return view('admin.submedicalspecialties.edit', compact('submedicalspecialty','dropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submedicalspecialties $submedicalspecialty)
    {
        //
         $request->validate([
            'Enname' => 'required',
        ]);
        
        if ($request->has('Enspecialties') && !is_null($request->input('Enspecialties'))) {
         // Extracting ID and Enname from the selected option
        $selectedOption = explode(':', $request->input('Enspecialties'));
        $msid = $selectedOption[0];
        $msname = $selectedOption[1];
        $submedicalspecialty->Enspecialties = $msid;
        $submedicalspecialty->Medicalspec = $msname;
        }
    
         // Update other attributes
        $submedicalspecialty->update($request->except('Logo')); // Update all attributes except Logo

        // Handle file upload if a new file is provided
        if ($request->hasFile('Logo')) {
            // Delete the old image file if it exists
            if ($submedicalspecialty->Logo) {
                Storage::delete($submedicalspecialty->Logo);
            }

            // Upload the new image file
            $file = $request->file('Logo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/", $fileName);
            $submedicalspecialty->Logo = "/uploads/" . $fileName; // Update the Logo attribute   
        }

     $submedicalspecialty->save(); // Save the changes to the database
    
        return redirect()->route('submedicalspecialties.index')
                        ->with('success','Sub Medical Specialties updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMedicalSpecialties $submedicalspecialty)
    {
        //
         $submedicalspecialty->delete();
    
        return redirect()->route('submedicalspecialties.index')
                        ->with('success','Sub Medical Specialties deleted successfully');
    }

    public function updatestatus(Request $request)
    {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = SubMedicalSpecialties::findOrFail($id); // Change 'user_id' to the actual field name
        
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
