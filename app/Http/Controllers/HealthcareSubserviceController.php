<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use App\Models\SubServices;
use App\Models\OurServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HealthcareSubserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Get the currently authenticated healthcare user
        $healthcareUser = Auth::guard('serviceprovider')->id();
    
        if ($healthcareUser) {
            // Fetch SubServices where Healthcareid contains the user's ID (e.g., 10)
            $subservices = SubServices::whereRaw("FIND_IN_SET(?, Healthcareid) > 0", [$healthcareUser])
                ->latest() // Orders the results by the latest
                ->paginate(20); // Paginates the results with 20 items per page
        } else {
            // Handle case where healthcare user is not authenticated
            $query = SubServices::query();
    
            // Handle search if provided
            if ($request->has('search')) {
                $searchTerm = $request->input('search');
                $query->where('Enhealthcare', 'LIKE', "%$searchTerm%");
            }
    
            // Get paginated results
            $subservices = $query->latest()->paginate(20);
        }
    
        // Return the view with the subservices
        return view('healthcare.services.index', compact('subservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();

        // Return the view with the dropdown options
        return view('healthcare.services.create', compact('dropdownOptions', 'sdropdownOptions'));
    }

    public function createbody(Request $request)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = OurServices::all();
        $spOptions = ServiceProvider::all();
        $sOptions = SubServices::where('Testcategory', 'Body Test')->get();

        // Return the view with the dropdown options
        return view('healthcare.services.createbody', compact('dropdownOptions', 'spOptions', 'sOptions'));
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

        if ($Servicetype == 'Single') {
            $request->validate([
                'Enname' => 'required',
                'Service' => 'required',
                // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
                //'Logo' => 'required|mimes:jpg,png|max:2048',

            ]);

            if ($request->hasfile('Logo')) {
                $file = $request->file('Logo');

                $fileName = $file->getClientOriginalName();
                $filePath = $file->move(public_path() . "/uploads/", $fileName);
                //$ourservices->Logo = $fileName;
                $subservices->Logo =  "/uploads/" . $fileName;
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
            $subservices->Status = $request->input('Status');
            $subservices->Healthcareid = Auth::guard('serviceprovider')->id();

            $subservices->save();
        } 
        else{

            // dd($request->all());
            // exit();
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

                // Store file information in the database
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
                $subservices->Status = $request->input('Status');
                $subservices->Healthcareid = Auth::guard('serviceprovider')->id();

                // Add other fields as needed
                $subservices->save();
            }
        }


        return redirect()->route('healthcare.services.index')
            ->with('success','Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();

        $subservices = SubServices::findOrFail($id); // Assuming HealthcareService is the model for healthcare services
        return view('healthcare.services.show',compact('subservices','dropdownOptions','sdropdownOptions','ssdropdownOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
        $subservices = SubServices::findOrFail($id);
        return view('healthcare.services.edit', compact('subservices','dropdownOptions','sdropdownOptions', 'ssdropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'Enname' => 'required',
        ]);


        // Update other attributes
        $subservices->update($request->except('Logo')); // Update all attributes except Logo

        // Handle file upload if a new file is provided
        if ($request->hasFile('Logo')) {
            // Delete the old image file if it exists
            if ($subservices->Logo) {
                Storage::delete($subservice->Logo);
            }

            // Upload the new image file
            $file = $request->file('Logo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path() . "/uploads/", $fileName);
            $subservices->Logo = "/uploads/" . $fileName; // Update the Logo attribute   
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


        $subservices->Healthcareid = Auth::guard('serviceprovider')->id();;

        $subservices->save(); // Save the changes to the database

        return redirect()->route('healthcare.services.index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subservices = SubServices::findOrFail($id);
        $subservices->delete();

        return redirect()->route('healthcare.services.index')
            ->with('success','Service deleted successfully');
    }
}