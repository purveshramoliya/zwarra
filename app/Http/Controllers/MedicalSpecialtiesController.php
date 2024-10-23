<?php

namespace App\Http\Controllers;

use App\Models\MedicalSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicalSpecialtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $query = MedicalSpecialties::query();

    // Check if search query exists
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('Enname', 'LIKE', "%$searchTerm%");
        }

    // Get paginated offers
        $medicalspecialties = $query->latest()->paginate(20);

        return view('admin.medicalspecialties.index', compact('medicalspecialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.medicalspecialties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        // Store file information in the database
        $medicalspecialties = new MedicalSpecialties();
        $medicalspecialties->Enname = $request->input('Enname');
        $medicalspecialties->Arname = $request->input('Arname');
        $medicalspecialties->Estimatedtime = $request->input('Estimatedtime');
        $medicalspecialties->Status = 1;

        if($request->hasfile('Logo'))
        {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $medicalspecialties->Logo =  "/uploads/".$fileName;
        }

        try {
            $medicalspecialties->save();
        } catch (\Exception $e) {
    dd($e->getMessage()); // or log the error message
}

return redirect()->route('medicalspecialties.index')
->with('success','Medical Specialties created successfully.');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalSpecialties $medicalspecialty)
    {
        //
       return view('admin.medicalspecialties.show',compact('medicalspecialty'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalSpecialties $medicalspecialty)
    {
        //
       return view('admin.medicalspecialties.edit',compact('medicalspecialty'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicalspecialties $medicalspecialty)
    {
        //
       $request->validate([
        'Enname' => 'required',
    ]);

      // Update other attributes
        $medicalspecialty->update($request->except('Logo')); // Update all attributes except Logo

        // Handle file upload if a new file is provided
        if ($request->hasFile('Logo')) {
            // Delete the old image file if it exists
            if ($medicalspecialty->Logo) {
                Storage::delete($medicalspecialty->Logo);
            }

            // Upload the new image file
            $file = $request->file('Logo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/", $fileName);
            $medicalspecialty->Logo = "/uploads/" . $fileName; // Update the Logo attribute   
        }

     $medicalspecialty->save(); // Save the changes to the database

     return redirect()->route('medicalspecialties.index')
     ->with('success',' Medical Specialties updated successfully');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalSpecialties $medicalspecialty)
    {
        //
       $medicalspecialty->delete();

       return redirect()->route('medicalspecialties.index')
       ->with('success',' Medical Specialties deleted successfully');
   }

   public function updatestatus(Request $request)
   {
    $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = MedicalSpecialties::findOrFail($id); // Change 'user_id' to the actual field name
        
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
