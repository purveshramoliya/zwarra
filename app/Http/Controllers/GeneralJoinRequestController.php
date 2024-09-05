<?php

namespace App\Http\Controllers;

use App\Models\GeneralJoinRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GeneralJoinRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $generaljoinrequest = GeneralJoinRequest::latest()->paginate(20);

        return view('admin.generaljoinrequest.index', compact('generaljoinrequest'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralJoinRequest  $generalJoinRequest
     * @return \Illuminate\Http\Response
     */

    public function show(GeneralJoinRequest $generaljoinrequest)
    {
     return view('admin.generaljoinrequest.show',compact('generaljoinrequest'));
    }

    /**
     * filter data for medical service **/
    public function showType($type)
    {
        // Retrieve service provider records based on the status with pagination
        $generaljoinrequest = GeneralJoinRequest::where('Type', $type)->paginate(20);

        // If records were found, pass them to the view along with the status
        return view('admin.generaljoinrequest.index', compact('generaljoinrequest', 'type'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralJoinRequest $generaljoinrequest)
    {
        //
       $generaljoinrequest->delete();

       return redirect()->route('generaljoinrequest.index')
       ->with('success','Join Request deleted successfully');
   }

   public function updatestatus(Request $request)
   {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = GeneralJoinRequest::findOrFail($id); // Change 'user_id' to the actual field name
        
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralJoinRequest  $generalJoinRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralJoinRequest $joinrequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralJoinRequest  $generalJoinRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralJoinRequest $joinrequest)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function RegisterGeneralJoinRequest(Request $request)
{
    // Decode JSON payload
    $requestData = $request->all();

    if (!$requestData) {
        // Handle case where registration data is missing from session
        return response()->json(['error' => 'data is missing.'], 400);
    }

    // Set default values if not present in the request data
    $requestData['Male'] = $request->input('Male', 0);
    $requestData['Female'] = $request->input('Female', 0);
    $requestData['Homevisitnparamedic'] = $request->input('Homevisitnparamedic', 0);
    $requestData['Telemedicinennurse'] = $request->input('Telemedicinennurse', 0);
    $requestData['Allnlabtech'] = $request->input('Allnlabtech', 0);
    $requestData['Othersnphysio'] = $request->input('Othersnphysio', 0);

    // Validation for step 4
    $validator = Validator::make($requestData, [
        'Firstname' => 'required',
        'Email' => 'required', // unique rule added
        'Phone' => 'required',
        'Male' => 'nullable|numeric',
        'Female' => 'nullable|numeric',
        'Homevisitnparamedic' => 'nullable|numeric',
        'Telemedicinennurse' => 'nullable|numeric',
        'Allnlabtech' => 'nullable|numeric',
        'Othersnphysio' => 'nullable|numeric',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Now you can store $requestData in the database
    $Registration = GeneralJoinRequest::create($requestData);

    // Return a success response with the created patient registration data
    return response()->json([
        'message' => 'Created general join request successfully',
        //'GeneralJoinRequest' => $Registration,
    ], 200);
}


}
