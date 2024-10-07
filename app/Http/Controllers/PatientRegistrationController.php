<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\PatientRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PatientRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patientregistration = PatientRegistration::latest()->paginate(5);

        return view('admin.patientregistration.index', compact('patientregistration'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.patientregistration.create');
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
            'Firstname' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
        ]);

        // Store file information in the database
        $patientregistration = new PatientRegistration();
        PatientRegistration::create($request->all());


        return redirect()->route('patientregistration.index')
            ->with('success', 'Patient Record created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(PatientRegistration $patientregistration)
    {
        //
        return view('admin.patientregistration.show', compact('patientregistration'));
    }

    public function showStatus($statusOrType)
    {
       
        if ($statusOrType === 'Register' || $statusOrType === 'Non Register'  || $statusOrType === 'Iqama') {
            // Handle status condition
            $patientregistration = PatientRegistration::where('type', $statusOrType)->paginate(10);
        } else {
            // Handle type condition
            $patientregistration = PatientRegistration::where('status', $statusOrType)->paginate(10);
        }

        // Pass the records to the view
        return view('admin.patientregistration.index', compact('patientregistration'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientRegistration $patientregistration)
    {
        //
        return view('admin.patientregistration.edit', compact('patientregistration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientRegistration $patientregistration)
    {
        //
        $request->validate([
            'Firstname' => 'required',
            'Email' => 'required',
        ]);

        $patientregistration->update($request->all());

        return redirect()->route('patientregistration.index')
            ->with('success', 'Patient Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientRegistration $patientregistration)
    {
        //
        $patientregistration->delete();

        return redirect()->route('patientregistration.index')
            ->with('success', 'Patient Record deleted successfully');
    }

    public function updatestatus(Request $request)
    {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = PatientRegistration::findOrFail($id); // Change 'user_id' to the actual field name
        
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


     public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'phone' => 'required|string',
            'country' => 'required|string',
        ]);

        // Retrieve phone and country from request
        $phone = $request->input('phone');
        $country = $request->input('country');

        // Attempt to find the patient
        $patient = PatientRegistration::where('phone', $phone)
                                      ->where('country', $country)
                                      ->first();

        if ($patient) {
            // Example: Creating a token (assuming you use Laravel Sanctum for API authentication)
            $token = $patient->createToken('authToken')->plainTextToken;
             // Retrieve firstname and lastname
            $patientid = $patient->id;
            $firstname = $patient->Firstname;
            $lastname = $patient->Lastname;
            $phone = $patient->Phone;
            $email = $patient->Email;
            $dob = $patient->Dob;
            $nationalid = $patient->Nationalid;
            $maritalstatus = $patient->Maritalstatus;
            $country = $patient->Country;
            $gender = $patient->Gender;
            $type = $patient->Type;
    
            // Create the username by concatenating firstname and lastname
            $username = $firstname . ' ' . $lastname;

            return response()->json([
                'message' => 'Login successful',
                 'token' => $token, 
                 'id' => $patientid, // Uncomment if using token authentication
                 'username' => $username,
                 'phone' => $phone,
                 'email' => $email,
                 'dob' => $dob,
                 'nationalid' => $nationalid,
                 'maritalstatus' => $maritalstatus,
                 'country' => $country,
                 'gender' => $gender,
                 'type' => $type,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Login failed: Invalid phone or country',
            ], 401);
        }
    }

    //function for registration api
   public function register(Request $request)
    {
        // Combine all request data
        $requestData = $request->all();

        // Combine validation rules from all steps
        $validator = Validator::make($requestData, [
            'Firstname' => 'required',
            'Lastname' => 'required|string',
            'Phone' => 'required|unique:patientregistration,phone', // Ensure phone is unique
            'Email' => 'required|email|unique:patientregistration,email',
            'Password' => 'required|min:8',
            'Dob' => 'required',
            'Gender' => 'required',
            'Country' => 'required',
            'Nationalid' => 'required',
            'Type' => 'required',
        ], [
            'Email.unique' => 'The email address is already in use.',
            'Phone.unique' => 'The phone number is already in use.', // Custom message for phone uniqueness
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Get validated data
        $validatedData = $validator->validated();

        // Hash the password
        $validatedData['Password'] = Hash::make($validatedData['Password']);

        // Store the data in the database
        $patientRegistration = PatientRegistration::create($validatedData);

        // Return a success response with the created patient registration data
        return response()->json([
            'message' => 'Registration completed successfully',
            'patient_registration' => $patientRegistration,
        ], 200);
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function registerpatient(Request $request)
    {
        // Decode JSON payload
        $requestData = $request->all();


        if (!$requestData) {
            // Handle case where registration data is missing from session
            return response()->json(['error' => 'data is missing.'], 400);
        }

        // Validation for step 4
        $validator = Validator::make($request->all(), [
            'Lastname' => 'required',
            // 'Email' => 'required', // unique rule added
            'Phone' => 'required|numeric|digits_between:10,15',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Now you can store $registrationData in the database
        $Registration = PatientRegistration::create($requestData);

        // Return a success response with the created patient registration data
        return response()->json([
            'message' => 'Created Patient Profile successfully',
            'patient_registration' => $Registration,
        ], 200);
    }


    public function getpatients($id)
    {
        // Find the related model by ID
        $patientRegistration = PatientRegistration::find($id);

        // If the related model doesn't exist, return an empty response or an error message
        if (!$patientRegistration) {
            return response()->json(['error' => 'Patient record not found.'], 404);
        }

        // Fetch records from PatientRegistration where the related_id matches
        $patientrecords = PatientRegistration::where('Relatedto', $id)->get();

         // Return a success response with the created patient registration data
        return response()->json([
            'message' => 'Fetch Patient records successfully',
            'patient_record' => $patientrecords,
        ], 200);
    }

 public function getPatientDetails($id)
    {
        // Find the patient record by ID
        $patientRecord = PatientRegistration::find($id);

        // If the patient record doesn't exist, return an error response
        if (!$patientRecord) {
            return response()->json(['error' => 'Patient record not found.'], 404);
        }

        // Return a success response with the patient registration data
        return response()->json([
            'message' => 'Fetched patient record successfully',
            'patient_record' => $patientRecord,
        ], 200);
    }

    public function updatepatient(Request $request, $id)
    {
        // Find the patient record by ID
        $patientRegistration = PatientRegistration::find($id);

        // If the patient record doesn't exist, return an error response
        if (!$patientRegistration) {
            return response()->json(['error' => 'Patient record not found.'], 404);
        }

        // Validate the request data for specific fields
        $validator = Validator::make($request->all(), [
            'Firstname' => 'sometimes|required|string|max:255',
            'Email' => 'sometimes|required|email|unique:patientregistration,Email,' . $patientRegistration->id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Update the patient record with all incoming data
        $patientRegistration->update($request->all());

        // Return a success response
        return response()->json([
            'message' => 'Patient Record updated successfully',
           // 'patient_record' => $patientRegistration,
        ], 200);
    }


}
