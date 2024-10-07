<?php

namespace App\Http\Controllers;
use App\Models\ServiceProvider;
use App\Models\SubServices;
use App\Models\OurServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubServicesController extends Controller
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
            $subservices = SubServices::where('Healthcareid', $id)->latest()->paginate(20);

        // Check if the service provider record exists
            /*if ($subservices->isEmpty()) {
                //return response()->json(['error' => 'Services not found for the provided ID'], 404);
                // Store the error message in the session
                session()->flash('error', 'Services not found for selected service provider');
                
                // Redirect back to the previous page
                return redirect()->back();
            }*/
        } else {

            $query = OurServices::query();

            if ($request->has('search')) {
                $searchTerm = $request->input('search');
                $query->where('Enname', 'LIKE', "%$searchTerm%");
            }

            $subservices = $query->latest()->paginate(20);
        }

        return view('admin.subservices.index', compact('subservices', 'id'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->input('id');
        
        // Retrieve dropdown options from the database
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();

        // Return the view with the dropdown options
        return view('admin.subservices.create', compact('dropdownOptions','sdropdownOptions','id'));
      
    }


    public function createbody(Request $request)
    {
        $id = $request->input('id');
        // Retrieve dropdown options from the database
        $dropdownOptions = OurServices::all();
        $spOptions = ServiceProvider::all();
        $sOptions = SubServices::where('Testcategory', 'Body Test')->get();

    // Return the view with the dropdown options
        return view('admin.subservices.createbody', compact('dropdownOptions','spOptions','sOptions','id'));
    }

    public function single(Request $request)
    {
        $id = $request->input('id');
      
        // Fetch SubServices where Testcategory matches $id
        $subservices = SubServices::where('Service', $id)->where('Servicetype','Single')
                    ->latest()
                    ->paginate(20);

        // Return the view with the dropdown options
        return view('admin.subservices.single', compact('id','subservices'));
    }

    public function package(Request $request)
    {
        $id = $request->input('id');
        // Fetch SubServices where Testcategory matches $id
          $subservices = SubServices::select('Packagename','created_at')
                    ->where('Service', $id)
                    ->whereNotNull('Packagename')
                    ->distinct()
                    ->latest()
                    ->paginate(20);

       // Return the view with the dropdown options
        return view('admin.subservices.package', compact('id','subservices'));
    }

    public function packageservices(Request $request) {
    $packagename = $request->input('packagename');
    
    // Fetch service based on $packagename
    $subservices = SubServices::where('packagename', $packagename) ->latest()
                    ->paginate(20);
    
    // Pass $service to the view or perform other operations
    return view('admin.subservices.packageservices', compact('subservices'));
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
        $subservices = new SubServices();

        $Servicetype = $request->input('Servicetype');

        if($Servicetype == 'Single')
        {
            $request->validate([
                'Enname' => 'required',
                'Service' => 'required',
              // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
                //'Logo' => 'required|mimes:jpg,png|max:2048',

            ]);

            if($request->hasfile('Logo'))
            {
                $file = $request->file('Logo');

                $fileName = $file->getClientOriginalName();
                $filePath = $file->move(public_path()."/uploads/",$fileName);
               //$ourservices->Logo = $fileName;
                $subservices->Logo =  "/uploads/".$fileName;
            }

         // Extracting ID and Enname from the selected option
            if ($request->has('Service') && !is_null($request->input('Service'))) {
                // The 'Healthcare' input is set and not null
                $selectedOption = explode(':', $request->input('Service'));
                $serviceid = $selectedOption[0];
                $servicename = $selectedOption[1];
                $subservices->Service = $serviceid;
                $subservices->Mainservicename = $servicename;
            }
                
            if ($request->has('Healthcare') && !is_null($request->input('Healthcare'))) {
                // The 'Healthcare' input is set and not null
                $hselectedOption = explode(':', $request->input('Healthcare'));
                $hid = $hselectedOption[0];
                $hname = $hselectedOption[1];
                $subservices->Healthcareid = $hid;
                $subservices->Healthcare = $hname;
            }
            $HCid = $request->input('id');
            if($HCid)
            {
             $subservices->Healthcareid = $HCid;
            }
            $subservices->Enname = $request->input('Enname');
            $subservices->Arname = $request->input('Arname');
            $subservices->Testcategory = $request->input('Testcategory');
            $subservices->Subservicename = $request->input('Subservicename');
            $subservices->Endescription = $request->input('Endescription');
            $subservices->Ardescription = $request->input('Ardescription');
            $subservices->Servicetype = $request->input('Servicetype');
            $subservices->Eninstrucation = $request->input('Eninstrucation');
            $subservices->Arinstrucation = $request->input('Arinstrucation');
            $subservices->Entitle = $request->input('Entitle');
            $subservices->Artitle = $request->input('Artitle');
            $subservices->Price = $request->input('Price');
            $subservices->Status = 1;

            $subservices->save();
        }
        else{
        
            $request->validate([
                'Service' => 'required',
            ]);

            $Values = $request->input('selectedValues');
            $selectedValues = explode(",", $Values);

            foreach ($selectedValues as $selectedValue) {
            $subservices = new SubServices();
           // Extracting ID and Enname from the selected option
            if ($request->has('Service') && !is_null($request->input('Service'))) {
                // The 'Healthcare' input is set and not null
                $selectedOption = explode(':', $request->input('Service'));
                $serviceid = $selectedOption[0];
                $servicename = $selectedOption[1];
                $subservices->Service = $serviceid;
                $subservices->Mainservicename = $servicename;
            }
                
            if ($request->has('Healthcare') && !is_null($request->input('Healthcare'))) {
                // The 'Healthcare' input is set and not null
                $hselectedOption = explode(':', $request->input('Healthcare'));
                $hid = $hselectedOption[0];
                $hname = $hselectedOption[1];
                $subservices->Healthcareid = $hid;
                $subservices->Healthcare = $hname;
            }


                // Store file information in the database
               $HCid = $request->input('id');
                if($HCid)
                {
                 $subservices->Healthcareid = $HCid;
                }
                $subservices->Enname = $selectedValue;
                $subservices->Arname = $request->input('Arname');
                $subservices->Testcategory = $request->input('Testcategory');
                $subservices->Packagename = $request->input('Packagename');
                $subservices->Subservicename = $request->input('Subservicename');
                $subservices->Endescription = $request->input('Endescription');
                $subservices->Ardescription = $request->input('Ardescription');
                $subservices->Servicetype = $request->input('Servicetype');
                $subservices->Eninstrucation = $request->input('Eninstrucation');
                $subservices->Arinstrucation = $request->input('Arinstrucation');
                $subservices->Entitle = $request->input('Entitle');
                $subservices->Artitle = $request->input('Artitle');
                $subservices->Price = $request->input('Price');
                $subservices->Status = 1;

               // Add other fields as needed
                $subservices->save();
            }
        }

        
        return redirect()->route('subservices.index')
        ->with('success','Main Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(SubServices $subservice)
    {
      // Retrieve dropdown options from the database
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
        return view('admin.subservices.show',compact('subservice','dropdownOptions','sdropdownOptions','ssdropdownOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(SubServices $subservice)
    {
      // Retrieve dropdown options from the database
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
        return view('admin.subservices.edit',compact('subservice','dropdownOptions','sdropdownOptions','ssdropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubServices $subservice)
    {
        //
         $request->validate([
            'Enname' => 'required',
        ]);


        // Update other attributes
        $subservice->update($request->except('Logo')); // Update all attributes except Logo

        // Handle file upload if a new file is provided
        if ($request->hasFile('Logo')) {
            // Delete the old image file if it exists
            if ($subservice->Logo) {
                Storage::delete($subservice->Logo);
            }

            // Upload the new image file
            $file = $request->file('Logo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/", $fileName);
            $subservice->Logo = "/uploads/" . $fileName; // Update the Logo attribute   
        }

        // Extracting ID and Enname from the selected option
        if ($request->has('Service') && !is_null($request->input('Service'))) {
                // The 'Healthcare' input is set and not null
                $selectedOption = explode(':', $request->input('Service'));
                $serviceid = $selectedOption[0];
                $servicename = $selectedOption[1];
                $subservice->Service = $serviceid;
                $subservice->Mainservicename = $servicename;
        }


        if ($request->has('Healthcare') && !is_null($request->input('Healthcare'))) {
                // The 'Healthcare' input is set and not null
                $hselectedOption = explode(':', $request->input('Healthcare'));
                $hid = $hselectedOption[0];
                $hname = $hselectedOption[1];
                $subservice->Healthcareid = $hid;
                $subservice->Healthcare = $hname;
        }
        $HCid = $request->input('id');
            if($HCid)
            {
             $subservices->Healthcareid = $HCid;
            }

     $subservice->save(); // Save the changes to the database

     return redirect()->route('subservices.index')
     ->with('success',' Main Service updated successfully');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubServices $subservice)
    {
        //
     $subservice->delete();

     return redirect()->route('subservices.index')
     ->with('success',' Main Service deleted successfully');
 }

 public function updatestatus(Request $request)
 {
    $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = SubServices::findOrFail($id); // Change 'user_id' to the actual field name
        
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

    public function subservicesapi(Request $request)
    {
         $services = SubServices::where('Service', $request->id)
                            ->where('Servicetype', $request->servicetype)
                            ->whereNull('Subservicename')
                            ->where('status', 1)
                            ->get();

       // Check if any services are found
        if ($services->isEmpty()) {
            return response()->json(['error' => 'Sub services not found'], 404);
        }
        
        return response()->json($services);
    }

    public function subservicespackageapi(Request $request)
    {
         $services = SubServices::where('Service', $request->id)
                            ->where('Servicetype', $request->servicetype)
                            ->where('Packagename', $request->packagename)
                            ->whereNull('Subservicename')
                            ->where('status', 1)
                            ->get();
         // Calculate the sum of the prices of the retrieved services
         $totalPrice = $services->sum('Price');

       // Check if any services are found
        if ($services->isEmpty()) {
            return response()->json(['error' => 'Sub services not found'], 404);
        }

         // Prepare the response data
         $response = [
            'packagename' => $request->packagename,
            'total_price' => $totalPrice,
            'services' => $services
        ];

        // Return the JSON response
        return response()->json($response);
    }  

     public function subservicesinsideapi(Request $request)
    {
        $query = SubServices::where('Subservicename', $request->servicename);

        if ($request->servicetype === 'single') {
            $query->where('Servicetype', 'single');
        } elseif ($request->servicetype === 'package') {
            $query->where('Servicetype', 'package');
        }

        // Add condition to check status
        $query->where('status', 1);

        $services = $query->get();

        // Check if any services are found
        if ($services->isEmpty()) {
            return response()->json(['error' => 'Sub services not found'], 404);
        }
        
        return response()->json($services);
    }


    public function packagenameapi(Request $request)
     {
        $services = SubServices::select('Packagename')
                            ->where('Subservicename', $request->subservicename )
                            ->where('status', 1)
                            ->whereNotNull('Packagename')
                            ->groupBy('Packagename')
                            ->get();

       // Check if any services are found
        if ($services->isEmpty()) {
            return response()->json(['error' => 'Sub services not found'], 404);
        }
        
        return response()->json($services);
    }

    public function subservicespacakgeinsideserviceapi(Request $request)
    {
        $query = SubServices::where('Subservicename', $request->servicename)->where('Packagename', $request->packagename);

        if ($request->servicetype === 'single') {
            $query->where('Servicetype', 'single');
        } elseif ($request->servicetype === 'package') {
            $query->where('Servicetype', 'package');
        }

        // Add condition to check status
        $query->where('status', 1);

        $services = $query->get();

        // Check if any services are found
        if ($services->isEmpty()) {
            return response()->json(['error' => 'Sub services not found'], 404);
        }
        
        return response()->json($services);
    }

    public function subservicepackagenameapi(Request $request)
     {
        $services = SubServices::select('Packagename')
                            ->where('Service', $request->service)
                            ->where('Servicetype', $request->servicetype)
                            ->whereNotNull('Packagename')
                            ->where('status', 1)
                            ->groupBy('Packagename')
                            ->get();

       // Check if any services are found
        if ($services->isEmpty()) {
            return response()->json(['error' => 'Sub services not found'], 404);
        }
        
        return response()->json($services);
    }
}
