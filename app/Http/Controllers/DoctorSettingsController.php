<?php

namespace App\Http\Controllers;

use App\Models\AllDoctors;
use App\Models\Bankings;
use App\Models\ScheduleConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Rules\UniqueAccountNumber;
use Validator;

class DoctorSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     public function showprofile()
    {
        // Get the current logged-in user ID using the serviceprovider guard
        $id = Auth::guard('doctor')->id();

        // Check if the ID is not null
        if ($id !== null) {
            // Retrieve the ServiceProvider record
            $doctor = AllDoctors::find($id);
            $bankings =  Bankings::where('Doctor', $id)->first();

            // If the ServiceProvider record exists, return the view with the data
            return view('doctor.profile.index', compact('doctor','bankings'));
        }

        // If the ID is null or the ServiceProvider record doesn't exist, you can handle the error here
        return redirect()->back()->with('error', 'Failed to retrieve profile data.');
    }


    public function setting()
    {
        $id = Auth::guard('doctor')->id();
        $profileData = Bankings::where('Doctor', $id)->first();
        $schedule = DB::table('scheduleconfiguration')
        ->select('Dayname', 'Servicetype', 'Starttime', 'Endtime') // Adjust columns as per your table structure
        ->orderByRaw("CASE 
                        WHEN Dayname = 'Monday' THEN 1 
                        WHEN Dayname = 'Tuesday' THEN 2 
                        WHEN Dayname = 'Wednesday' THEN 3 
                        WHEN Dayname = 'Thursday' THEN 4 
                        WHEN Dayname = 'Friday' THEN 5 
                        WHEN Dayname = 'Saturday' THEN 6 
                        WHEN Dayname = 'Sunday' THEN 7 
                    END")
        ->get()
        ->groupBy('Dayname');
        return view('doctor.profile.setting',compact('id','schedule','profileData'));
    }

    public function updatepassword(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'Password' => 'required|min:8',
            'ConfirmPassword' => 'required|same:Password',
        ]);

       if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput()->with('display', 'updatepassworddefault');
    }

        // Retrieve the ID of the authenticated service provider
        $id = Auth::guard('doctor')->id();

        // Find the service provider by ID
        $doctor = AllDoctors::find($id);

        if ($doctor) {
            // Update the password for the service provider
            $doctor->password = Hash::make($request->input('Password'));
            $doctor->save();

            // Redirect to a success page or somewhere else
            return redirect()->route('login')
                        ->with('success','Update password successfully.');
        }
    }



     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
  
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'Accountname' => 'required',
            'Accountnumber' => ['required', 'string', 'max:255', new UniqueAccountNumber],
            'Bankname' => 'required',
            // Add validation rules for other fields as needed
        ]);

        // Retrieve the logged-in user's ID
        $id = Auth::guard('doctor')->id();

         // Handle POST request for form submission
        if ($request->isMethod('post')) {
            // Validate the request
            $request->validate([
                'Accountname' => 'required|string|max:255',
                'Accountnumber' => 'required|string|max:255|unique:bankings,Accountnumber',
                'Bankname' => 'required|string|max:255',
                // Add other validation rules as needed
            ]);
        }

        // Find the corresponding Bankings record
        $banking =  Bankings::where('Doctor', $id)->first();

        // Check if a record exists for the logged-in user
        if ($banking) {
            // Update the record with the new data from the request
            $banking->update($request->all());

            return redirect()->route('doctor.settings')->with('success', 'Banking information updated successfully.');
        } else {
            // If no record exists for the logged-in user, create a new one
            Bankings::create(array_merge($request->all(), ['Doctor' => $id]));

            return redirect()->route('doctor.settings')->with('success', 'Banking information created successfully.');
        }
    }



    public function configstore(Request $request)
    {
       $request->validate([
        'Servicetype' => 'required',
        'Starttime' => 'required',
        'Endtime' => 'required',
        // Add validation rules for other fields as needed
    ]);

    $scheduleconfig = ScheduleConfiguration::create($request->all());
     return redirect()->route('doctor.config.store')
                        ->with('success','Banking Information created successfully.');
    }

    public function bookings()
    {
     return view('doctor.bookings.index');
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
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorSettings  $doctorSettings
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorSettings $doctorSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorSettings  $doctorSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorSettings $doctorSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoctorSettings  $doctorSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorSettings $doctorSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorSettings  $doctorSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorSettings $doctorSettings)
    {
        //
    }


}
