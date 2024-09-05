<?php

namespace App\Http\Controllers;

use App\Models\OurServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $query = OurServices::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('Enname', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $ourservices = $query->latest()->paginate(20);

    return view('admin.ourservices.index', compact('ourservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.ourservices.create');
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


         // Store file information in the database
        $ourservices = new OurServices();
        $ourservices->Testcategory = $request->input('Testcategory');
        $ourservices->Enname = $request->input('Enname');
        $ourservices->Arname = $request->input('Arname');
        $ourservices->Endescription = $request->input('Endescription');
        $ourservices->Ardescription = $request->input('Ardescription');
        $ourservices->Status = $request->input('Status');

        if($request->hasfile('Logo'))
        {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $ourservices->Logo =  "/uploads/".$fileName;
        }

        try {
            $ourservices->save();
        } catch (\Exception $e) {
        dd($e->getMessage()); // or log the error message
    }


    return redirect()->route('ourservices.index')
    ->with('success','Main Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(OurServices $ourservice)
    {
        //
     return view('admin.ourservices.show',compact('ourservice'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(OurServices $ourservice)
    {
        //
     return view('admin.ourservices.edit',compact('ourservice'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurServices $ourservice)
    {
        $request->validate([
            'Enname' => 'required',
            //'Logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for the Logo field
        ]);

    
        // Update other attributes
        $ourservice->update($request->except('Logo')); // Update all attributes except Logo

        // Handle file upload if a new file is provided
        if ($request->hasFile('Logo')) {
            // Delete the old image file if it exists
            if ($ourservice->Logo) {
                Storage::delete($ourservice->Logo);
            }

            // Upload the new image file
            $file = $request->file('Logo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/", $fileName);
            $ourservice->Logo = "/uploads/" . $fileName; // Update the Logo attribute
            $ourservice->save(); // Save the changes to the database
        }

        return redirect()->route('ourservices.index')
                        ->with('success','Main Service updated successfully');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurServices $ourservice)
    {
        //
     $ourservice->delete();

     return redirect()->route('ourservices.index')
     ->with('success',' Main Service deleted successfully');
 }

 public function updatestatus(Request $request)
 {
    $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = OurServices::findOrFail($id); // Change 'user_id' to the actual field name
        
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

    public function ourservicesapi(Request $request)
    {
        // Retrieve the type parameter from the request, default to null if not provided
        $type = $request->query('type');
        
        // Start building the query
        $query = OurServices::where('status', 1);
        
        // If type is provided, add a condition to filter by testcategory
        if ($type) {
            $query->where('Testcategory', $type);
        }
        
        // Execute the query and get the results
        $LaborotaryServices = $query->get();

        // Check if any services are found
        if ($LaborotaryServices->isEmpty()) {
            return response()->json(['error' => 'Our services not found'], 404);
        }

        return response()->json($LaborotaryServices);
    }

}
