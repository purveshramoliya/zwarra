<?php

namespace App\Http\Controllers;
use App\Models\DoctorPositions;
use App\Models\JoinDoctorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JoinDoctorRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
    $query = JoinDoctorRequest::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('firstname', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $doctorrequest = $query->latest()->paginate(20);

    return view('admin.doctorrequest.index', compact('doctorrequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // Retrieve dropdown options from the database
        $dropdownOptions = DoctorPositions::all();

        // Return the view with the dropdown options
        return view('admin.doctorrequest.create', compact('dropdownOptions'));
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
            'firstname' => 'required',
            'email' => 'required|email|unique:joindocrequest,Email', // unique rule added
            'phone' => 'required',
        ]);

         // Store file information in the database
         $doctorrequest = new JoinDoctorRequest();
         JoinDoctorRequest::create($request->all());
        

        return redirect()->route('doctorrequest.index')
                        ->with('success','Doctor Join Request created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(JoinDoctorRequest $doctorrequest)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = DoctorPositions::all();

       // Return the view with the dropdown options
        return view('admin.doctorrequest.show', compact('doctorrequest','dropdownOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(JoinDoctorRequest $doctorrequest)
    {
        // Retrieve dropdown options from the database
        $dropdownOptions = DoctorPositions::all();

       // Return the view with the dropdown options
        return view('admin.doctorrequest.edit', compact('doctorrequest','dropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JoinDoctorRequest $doctorrequest)
    {
        //
         $request->validate([
            'firstname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
    
        $doctorrequest->update($request->all());
    
        return redirect()->route('doctorrequest.index')
                        ->with('success','Doctor Join Reuquest updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(JoinDoctorRequest $doctorrequest)
    {
        //
         $doctorrequest->delete();
    
        return redirect()->route('doctorrequest.index')
                        ->with('success','Doctor Joint Request deleted successfully');
    }

    public function updatestatus(Request $request)
    {
    $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = JoinDoctorRequest::findOrFail($id); // Change 'user_id' to the actual field name
        
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

   public function registerdoctor(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'gender' => 'nullable|in:male,female',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'specialization' => 'nullable|string',
            'subspecialization' => 'nullable|string',
            'scfhs' => 'nullable|string',
            'scfhsno' => 'nullable|string',
            'filename' => 'nullable|file|mimes:jpg,jpeg,png',
            'service_type' => 'nullable|array',
            'service_type.*' => 'in:homevisit,telemedicine,all,other',
            'description' => 'nullable|string',
            'languages' => 'nullable|string',
            'department' => 'nullable|string',
            'degree' => 'nullable|string',
            'med_reg_expiry' => 'nullable',
            'med_reg_no' => 'nullable'
        ]);


        if ($request->hasFile('filename')) {
            $validatedData['filename'] = $request->file('filename')->store('uploads');
        }

        // Convert service_type array to JSON for storage
        $validatedData['service_type'] = json_encode($validatedData['service_type']);

        $doctorRequest = JoinDoctorRequest::create($validatedData);

        return response()->json([
            'message' => 'Doctor request created successfully',
            'data' => $doctorRequest,
        ], 201);
    }
}
