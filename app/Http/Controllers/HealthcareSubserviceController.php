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

        // Initialize the base query for SubServices
        $querySingle = SubServices::query();
        $queryPackage = SubServices::query();

        // If the user is authenticated, filter by Healthcareid and Servicetype
        if ($healthcareUser) {
            $querySingle = $querySingle->whereRaw("FIND_IN_SET(?, Healthcareid) > 0", [$healthcareUser])
                ->where('Servicetype', 'Single');
            $queryPackage = $queryPackage->whereRaw("FIND_IN_SET(?, Healthcareid) > 0", [$healthcareUser])
                ->where('Servicetype', 'Package');
        }

        // Apply search filter if search term is provided (from POST request)
        if ($request->has('search') && !empty($request->input('search'))) {
            $searchTerm = $request->input('search');
            $querySingle = $querySingle->where('Enname', 'LIKE', "%$searchTerm%");
            $queryPackage = $queryPackage->where('Enname', 'LIKE', "%$searchTerm%");
        }
        // Get paginated results for each type
        $subservicessingle = $querySingle->latest()->paginate(20);
        $subservicespackage = $queryPackage->latest()->paginate(20);

        // Get options for dropdowns
        $dropdownOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();

        // Return the view with the subservices
        return view('healthcare.services.index', compact('subservicessingle', 'subservicespackage', 'dropdownOptions', 'sdropdownOptions'));
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
            $subservices->Subservicename = $request->input('Subservicename');
            $subservices->Servicetype = $request->input('Servicetype');
            $subservices->Price = $request->input('Price');
            $subservices->Status = $request->input('Status');
            $subservices->Gender = $request->input('Gender');
            $subservices->Estimated_time_for_a_service = $request->input('Estimatetime');
            $subservices->Change_service_price = $request->input('Changeserviceprice');
            $subservices->Healthcareid = Auth::guard('serviceprovider')->id();


            $subservices->save();
        } else {
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
                $Servicetype = $request->input('Servicetype');
                $subservices->Subservicename = $request->input('Subservicename');
                $subservices->Servicetype = $request->input('Servicetype');
                $subservices->Price = $request->input('Price');
                $subservices->Status = $request->input('Status');
                $subservices->Gender = $request->input('Gender');
                $subservices->Estimated_time_for_a_service = $request->input('Estimatetime');
                $subservices->Change_service_price = $request->input('Changeserviceprice');
                $subservices->Healthcareid = Auth::guard('serviceprovider')->id();
                $subservices->Enname = $selectedValue;
                $subservices->Packagename = $request->input('Packagename');


                // Add other fields as needed
                $subservices->save();
            }
        }


        return redirect()->route('healthcare.services.index')
            ->with('success', 'Service created successfully.');
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
        return view('healthcare.services.show', compact('subservices', 'dropdownOptions', 'sdropdownOptions', 'ssdropdownOptions'));
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
        return view('healthcare.services.edit', compact('subservices', 'dropdownOptions', 'sdropdownOptions', 'ssdropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    private function populateSubService($request, $subservice)
    {
        $subservice->Enname = $request->input('Enname');
        $subservice->Arname = $request->input('Arname');
        // Add other fields as needed
        $subservice->Healthcareid = Auth::guard('serviceprovider')->id();
        return $subservice;
    }

    public function update(Request $request, $id)
    {
        // Find the subservice by ID if needed, or create a new one

        $subservices = SubServices::findOrNew($id);
        $Servicetype = $request->input('Servicetype');

        if ($Servicetype == 'Single') {
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
            $subservices->Subservicename = $request->input('Subservicename');
            $subservices->Servicetype = $request->input('Servicetype');
            $subservices->Price = $request->input('Price');
            $subservices->Status = $request->input('Status');
            $subservices->Gender = $request->input('Gender');
            $subservices->Estimated_time_for_a_service = $request->input('Estimatetime');
            $subservices->Change_service_price = $request->input('Changeserviceprice');
            $subservices->Healthcareid = Auth::guard('serviceprovider')->id();


            $subservices->save();
        } else {
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
                $Servicetype = $request->input('Servicetype');
                $subservices->Subservicename = $request->input('Subservicename');
                $subservices->Servicetype = $request->input('Servicetype');
                $subservices->Price = $request->input('Price');
                $subservices->Status = $request->input('Status');
                $subservices->Gender = $request->input('Gender');
                $subservices->Estimated_time_for_a_service = $request->input('Estimatetime');
                $subservices->Change_service_price = $request->input('Changeserviceprice');
                $subservices->Healthcareid = Auth::guard('serviceprovider')->id();
                $subservices->Enname = $selectedValue;
                $subservices->Packagename = $request->input('Packagename');


                // Add other fields as needed
                $subservices->save();
            }
        }


        return redirect()->route('healthcare.services.index')->with('success', 'Service updated successfully');
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
            ->with('success', 'Service deleted successfully');
    }
}