<?php

namespace App\Http\Controllers;
use App\Models\Bankings;
use App\Models\ServiceProvider;
use App\Models\ScheduleConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Rules\UniqueAccountNumber;
use Validator;
use Carbon\Carbon;

class HealthcareSettingsController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth'); // Apply the 'auth' middleware to all methods in the controller
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function getProfileData()
    {
        // Fetch the profile data for the authenticated service provider
        $id = Auth::guard('serviceprovider')->id();
        $profileData =  Bankings::where('Healthcare', $id)->get();
        
        // Check if profile data exists
        if ($profileData) {
            // Return the profile data as a JSON response
            return response()->json($profileData);
        } else {
            // Return a response indicating that no profile data was found
            return response()->json(['error' => 'Profile data not found'], 404);
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
        $id = Auth::guard('serviceprovider')->id();

        // Find the corresponding Bankings record
        $banking =  Bankings::where('Healthcare', $id)->first();

        // Check if a record exists for the logged-in user
        if ($banking) {
            // Update the record with the new data from the request
            $banking->update($request->all());

            return redirect()->route('healthcare.settings')->with('success', 'Banking information updated successfully.');
        } else {
            // If no record exists for the logged-in user, create a new one
            Bankings::create(array_merge($request->all(), ['Healthcare' => $id]));

            return redirect()->route('healthcare.settings')->with('success', 'Banking information created successfully.');
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
     return redirect()->route('healthcare.profile.healthcaresetting')
                        ->with('success','Banking Information created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthcareSettings  $healthcareSettings
     * @return \Illuminate\Http\Response
     */
    public function show(HealthcareSettings $healthcareSettings)
    {
         $healthcareUser = Auth::guard('serviceprovider')->id();
         $banking = Bankings::where('Healthcare', $healthcareUser)
                                ->latest()
                                ->first();
        // Pass the $bankingInfo to the view
         return view('healthcaresettings.bankings.show', compact('banking'));
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
        $id = Auth::guard('serviceprovider')->id();

        // Find the service provider by ID
        $serviceprovider = ServiceProvider::find($id);

        if ($serviceprovider) {
            // Update the password for the service provider
            $serviceprovider->Password = Hash::make($request->input('Password'));
            $serviceprovider->save();

            // Redirect to a success page or somewhere else
            return redirect()->route('login')
                        ->with('success','Update password successfully.');
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HealthcareSettings  $healthcareSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthcareSettings $healthcareSettings)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HealthcareSettings  $healthcareSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthcareSettings $healthcareSettings)
    {
        //
    }


     public function getSessions(Request $request)
    {
        // Validate the request
        $request->validate([
            'dayname' => 'required|string',
            'servicetype' => 'required|string',
            'healthcareid' => 'required|integer',
        ]);

        // Retrieve dayname, servicetype, and healthcareid from the request
        $dayname = $request->input('dayname');
        $type = $request->input('servicetype');
        $healthcareid = $request->input('healthcareid');

        // Fetch the session with matching criteria
        $session = ScheduleConfiguration::where('Dayname', $dayname)
                           ->where('Servicetype', $type)
                           ->where('Healthcareid', $healthcareid)
                           ->first(['Starttime', 'Endtime']);

        if (!$session) {
            return response()->json([
                'message' => 'No matching session found',
            ], 404);
        }

        // Generate 1-hour time slots between starttime and endtime
        $startTime = Carbon::parse($session->Starttime);
        $endTime = Carbon::parse($session->Endtime);
        $timeSlots = [];

        while ($startTime->lte($endTime)) {
            $timeSlots[] = $startTime->format('H:i');
            $startTime->addHour();
        }

        // Return the response
        return response()->json([
            'time_slots' => $timeSlots,
        ], 200);
    }
}
