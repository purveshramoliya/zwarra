<?php

namespace App\Http\Controllers;
use App\Models\DoctorPositions;
use App\Models\AllDoctors;
use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Rules\UniqueEmail;

class AllDoctorsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
    $query = AllDoctors::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('Enname', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $alldoctors = $query->latest()->paginate(20);

    return view('admin.alldoctors.index', compact('alldoctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // Retrieve dropdown options from the database
        $dropdownOptions = DoctorPositions::all();

        // Return the view with the dropdown options
        return view('admin.alldoctors.create', compact('dropdownOptions'));
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
            'Email' => ['required', 'email', new UniqueEmail],// unique rule added
            'Password' => 'required',
            'Phone' => 'required',
            'Licenceno' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            'Logo' => 'required|mimes:jpg,png|max:2048',

        ]);

         // Store file information in the database
         $alldoctors = new AllDoctors();
         $Password = Hash::make($request->input('Password'));
         $alldoctors->Enname = $request->input('Enname');
         $alldoctors->Arname = $request->input('Arname');
         $alldoctors->Email = $request->input('Email');
         $alldoctors->Password = $Password;
         $alldoctors->Phone = $request->input('Phone');
         $alldoctors->Licenceno = $request->input('Licenceno');
         $alldoctors->Yearofexp = $request->input('Yearofexp');
         $alldoctors->Medicalspec = $request->input('Medicalspec');
         $alldoctors->Position = $request->input('Position');
       
        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $alldoctors->Logo =  "/uploads/".$fileName;
         }

         $alldoctors->save();

        // Handle multiple file uploads
        if ($request->hasfile('attachment')) {
            foreach ($request->file('attachment') as $file) {
                $fileName = $file->getClientOriginalName();
                $filePath = $file->move(public_path()."/uploads/", $fileName);

                // Create attachment record in the database
                $attachment = new Attachment();
                $attachment->filename = $fileName;
                $attachment->file_path = "/uploads/" . $fileName;
                $attachment->record_id = $alldoctors->id; // Assuming 'doctor_id' is the foreign key in the attachments table
                $attachment->save();
            }
        }

        return redirect()->route('alldoctors.index')
                        ->with('success','Doctor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(AllDoctors $alldoctor)
    {
        //

        // To retrieve attachments for a specific AllDoctors record
        $allDoctors = AllDoctors::find($alldoctor->id);
        $attachments = $allDoctors->attachment;

        // Retrieve dropdown options from the database
        $dropdownOptions = DoctorPositions::all();

       // Return the view with the dropdown options
        return view('admin.alldoctors.show', compact('alldoctor','dropdownOptions','attachments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(AllDoctors $alldoctor)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = DoctorPositions::all();

       // Return the view with the dropdown options
        return view('admin.alldoctors.edit', compact('alldoctor','dropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllDoctors $alldoctor)
    {
        //
         $request->validate([
            'Enname' => 'required',
            'Email' => 'required',
        ]);

         // Update other attributes
        $alldoctor->update($request->except('Logo')); // Update all attributes except Logo

        // Handle file upload if a new file is provided
        if ($request->hasFile('Logo')) {
            // Delete the old image file if it exists
            if ($alldoctor->Logo) {
                Storage::delete($alldoctor->Logo);
            }

            // Upload the new image file
            $file = $request->file('Logo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/", $fileName);
            $alldoctor->Logo = "/uploads/" . $fileName; // Update the Logo attribute   
        }

        $alldoctor->save(); // Save the changes to the database

         // Handle file upload if new files are provided
            if ($request->hasFile('attachment')) {
                 // Delete the old attachment records if needed
                 // Assuming you have a relationship between Doctor and Attachment models
                // $alldoctor->attachment()->delete();
                foreach ($request->file('attachment') as $file) {
                    $fileName = $file->getClientOriginalName();
                    $filePath = $file->move(public_path()."/uploads/", $fileName);

                    // Create new attachment records in the database
                    $attachment = new Attachment();
                    $attachment->filename = $fileName;
                    $attachment->file_path = "/uploads/" . $fileName;
                    $attachment->record_id = $alldoctor->id; // Assuming 'doctor_id' is the foreign key in the attachments table
                    $attachment->save();
                }
            }
    
        return redirect()->route('alldoctors.index')
                        ->with('success','Doctor updated successfully');
    }


    public function deleteAttachment($id)
    {
        // Find the attachment by ID
        $attachment = Attachment::findOrFail($id);

        // Delete the attachment file from storage
        Storage::delete($attachment->file_path);

        // Delete the attachment record from the database
        $attachment->delete();

        return redirect()->back()->with('success', 'Attachment deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllDoctors $alldoctor)
    {
        //
         $alldoctor->delete();
    
        return redirect()->route('alldoctors.index')
                        ->with('success','Doctor deleted successfully');
    }

    public function updatestatus(Request $request)
    {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = AllDoctors::findOrFail($id); // Change 'user_id' to the actual field name
        
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
