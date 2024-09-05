<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\ServiceProvider;
use App\Models\OurServices;
use App\Models\SubServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHealthcareServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    // Retrieve the ID from the request
    $id = $request->input('id');

    // Check if the ID is provided
    if ($id) {
        // Retrieve the service provider record based on the Spid
        $service = Services::where('Spid', $id)->latest()->paginate(5);

        // Check if the service provider record exists
        if ($service->isEmpty()) {
            // If the record doesn't exist, return a not found response
            return response()->json(['error' => 'Services not found for the provided ID'], 404);
        }
    } else {
        // If no ID is provided, retrieve all services
        $query = Services::query();

        // Check if search query exists
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('Enhealthcare', 'LIKE', "%$searchTerm%");
        }

        // Get paginated services
        $service = $query->latest()->paginate(20);
    }

    return view('healthcare.services.index', compact('service', 'id'));
  }

    public function profile()
    {
        return view('healthcare.healthcareprofile');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $id = $request->input('id');
        // Retrieve dropdown options from the database
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();

        // Return the view with the dropdown options
        return view('healthcare.services.create', compact('dropdownOptions','sdropdownOptions','ssdropdownOptions','id'));
      
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
            //'Enhealthcare' => 'required',
            'Arhealthcare' => 'required',
            // 'Password' => 'required',
            // 'Phone' => 'required',
            // 'Crnumber' => 'required',
            // 'City' => 'required',
            // 'Countrycode' => 'required',
            // 'Vat' => 'required',
            // 'Typeofservice' => 'required',
            // 'Financialshare' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
           // 'Regcertificate' => 'required|mimes:pdf,jpg,png|max:2048',

        ]);
        // Retrieve data from the request

         // Store file information in the database
         // $service = new Services();
         // Services::create($request->all());

         // Store file information in the database
         $service = new Services();
         $spId = $request->input('id');
         $service->Spid = $spId;
         $service->Enhealthcare = $request->input('Enhealthcare');
         $service->Arhealthcare = $request->input('Arhealthcare');
         $service->Enservicename = $request->input('Enservicename');
         $service->Arservicename = $request->input('Arservicename');
         $service->Ensubservicename = $request->input('Ensubservicename');
         $service->Arsubservicename = $request->input('Arsubservicename');
         $service->Estimatedtime = $request->input('Estimatedtime');
         $service->Price = $request->input('Price');
         $service->Newprice = $request->input('Newprice');
         $service->Gender = $request->input('Gender');
         $service->save();
        
        if ($request->input('id')!== null){
             return redirect()->route('services.index', ['id' => $spId])
                        ->with('success','Services created successfully.');
        }else{
             return redirect()->route('services.index')
                        ->with('success','Services created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $service)
    {
        //
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
         return view('healthcare.services.show',compact('service','dropdownOptions','sdropdownOptions','ssdropdownOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        //
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
         return view('healthcare.services.edit',compact('service','dropdownOptions','sdropdownOptions','ssdropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        //
         $request->validate([
            'Enhealthcare' => 'required',
            'Arhealthcare' => 'required',
        ]);
    
        $service->update($request->all());
    
        return redirect()->route('services.index')
                        ->with('success','Services updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        //
         $service->delete();
    
        return redirect()->route('services.index')
                        ->with('success','Services deleted successfully');
    }

    public function updatestatus(Request $request)
     {
         $sid = $request->input('sid');

        // Retrieve the user or whatever model you're updating
        $updatestatus = Services::findOrFail($sid); // Change 'user_id' to the actual field name
        
         // Update status logic here
        $status = $request->input('status');

         // Update the status in the database
        $updatestatus->update(['Status' => $status]);
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
