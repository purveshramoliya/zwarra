<?php

namespace App\Http\Controllers;

use App\Models\ServiceProviderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceProviderRequestController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
    $query = ServiceProviderRequest::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('Healthcare', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $serviceproviderrequest = $query->latest()->paginate(20);

    return view('admin.serviceproviderrequest.index', compact('serviceproviderrequest'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.serviceproviderrequest.create');
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
            'healthcare' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $selectedValues = $request->input('selectedValues');
       
         // Store file information in the database
        $serviceproviderrequest = new ServiceProviderRequest();
        $serviceproviderrequest->healthcare = $request->input('healthcare');
        $serviceproviderrequest->registernumber = $request->input('registernumber');
        $serviceproviderrequest->email = $request->input('email');
        $serviceproviderrequest->phone = $request->input('phone');
        $serviceproviderrequest->service_type = $selectedValues;
        $serviceproviderrequest->description = $request->input('description');
        $serviceproviderrequest->save();

        return redirect()->route('serviceproviderrequest.index')
        ->with('success','Healthcare join request created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProviderRequest $serviceproviderrequest)
    {
        //
       return view('admin.serviceproviderrequest.show',compact('serviceproviderrequest'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProviderRequest $serviceproviderrequest)
    {
        //
       return view('admin.serviceproviderrequest.edit',compact('serviceproviderrequest'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProviderRequest $serviceproviderrequest)
    {
        //
       $request->validate([
        'healthcare' => 'required',
        'email' => 'required',
       ]);

  
        // Update attributes except for excluded fields
       $serviceproviderrequest->update($request->all());

       return redirect()->route('serviceproviderrequest.index')
       ->with('success','Healthcare join request updated successfully');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProviderRequest $serviceproviderrequest)
    {
        //
       $serviceproviderrequest->delete();

       return redirect()->route('serviceproviderrequest.index')
       ->with('success','Healthcare deleted successfully');
   }

   public function updatestatus(Request $request)
   {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = ServiceProviderRequest::findOrFail($id); // Change 'user_id' to the actual field name
        
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function registerhealthcare(Request $request)
     {
        $validatedData = $request->validate([
            'healthcare' => 'nullable|string',
            'registernumber' => 'nullable|string',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'service_type' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $joinhealthcarerequest = ServiceProviderRequest::create($validatedData);

        return response()->json([
            'message' => 'Healthcare request created successfully',
            'data' => $joinhealthcarerequest,
        ], 201);
    }
}
