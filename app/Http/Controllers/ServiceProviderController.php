<?php

namespace App\Http\Controllers;
use App\Models\Bankings;
use App\Rules\UniqueEmail;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Rules\ValidDomainEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
    $query = ServiceProvider::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('Enname', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $serviceproviders = $query->latest()->paginate(20);

    return view('admin.serviceproviders.index', compact('serviceproviders'));
    }

    /**
     * filter data for medical service **/
    public function showStatus($status)
    {
        // Retrieve service provider records based on the status with pagination
        $serviceproviders = ServiceProvider::where('Typeofservice', $status)->paginate(10);

        // If records were found, pass them to the view along with the status
        return view('admin.serviceproviders.index', compact('serviceproviders', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.serviceproviders.create');
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
            'Enname' => 'required|alpha',
            'Arname' => 'required|alpha',
            'Email' => ['required', 'email', new ValidDomainEmail, 'unique:serviceprovider,email'],
            'Password' => 'required',
            'Phone' => 'required|digits:10',
            'Crnumber' => 'required|numeric',
            'City' => 'required',
            'Countrycode' => 'required|numeric',
            'Vat' => 'required|numeric',
            'Regcertificate' => 'required|mimes:jpeg,jpg,png|max:2048',
            'Logo' => 'required|mimes:jpeg,jpg,png|max:2048',
            'Comcerregister' => 'required|mimes:jpeg,jpg,png|max:2048',
            'Healthlicence' => 'required|mimes:jpeg,jpg,png|max:2048',
           
        ]);
        

        $Password = Hash::make($request->input('Password'));

         // Store file information in the database
        $serviceprovider = new ServiceProvider();
        $serviceprovider->Enname = $request->input('Enname');
        $serviceprovider->Arname = $request->input('Arname');
        $serviceprovider->Email = $request->input('Email');
        $serviceprovider->Password = $Password;
        $serviceprovider->Phone = $request->input('Phone');
        $serviceprovider->Crnumber = $request->input('Crnumber');
        $serviceprovider->City = $request->input('City');
        $serviceprovider->Countrycode = $request->input('Countrycode');
        $serviceprovider->Vat = $request->input('Vat');
        $serviceprovider->Status = 1;
        $serviceprovider->Typeofservice = $request->input('Typeofservice');
        $serviceprovider->Financialshare = $request->input('Financialshare');
        $serviceprovider->Location = $request->input('Location');
        $serviceprovider->Share = $request->input('Share');
        $serviceprovider->EstimatedTime = $request->input('EstimatedTime');
        $serviceprovider->Visitfees = $request->input('Visitfees');
        

        if($request->hasfile('Regcertificate'))
        {
            $file = $request->file('Regcertificate');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Regcertificate = $fileName;
            $serviceprovider->Regcertificate_url = "/uploads/".$fileName;
        }

        if($request->hasfile('Logo'))
        {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Logo = $fileName;
            $serviceprovider->Logo_url =  "/uploads/".$fileName;
        }

        if($request->hasfile('Comcerregister'))
        {
            $file = $request->file('Comcerregister');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Comcerregister = $fileName;
            $serviceprovider->Comcerregister_url =  "/uploads/".$fileName;
        }

        if($request->hasfile('Healthlicence'))
        {
            $file = $request->file('Healthlicence');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Healthlicence = $fileName;
            $serviceprovider->Healthlicence_url =  "/uploads/".$fileName;
        }

        $serviceprovider->save();

        return redirect()->route('serviceproviders.index')
        ->with('success','ServiceProvider created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProvider $serviceprovider)
    {
        //
       return view('admin.serviceproviders.show',compact('serviceprovider'));
    }

    /** for healthcare profile **/


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProvider $serviceprovider)
    {
        //
       return view('admin.serviceproviders.edit',compact('serviceprovider'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProvider $serviceprovider)
    {
        //
       $request->validate([
        'Enname' => 'required',
        'Email' => 'required',
       ]);

       
    // Extract fields to be excluded from the update
    $excludedFields = ['Logo', 'Regcertificate', 'Comcerregister', 'Healthlicence'];

    // Update attributes except for excluded fields
    $serviceprovider->update($request->except($excludedFields));

       // Check if password field is present in the request
        if ($request->has('password')) {
            // Hash the password before updating the model
            $request->merge(['password' => Hash::make($request->password)]);
        }

        if($request->hasfile('Regcertificate'))
        {
            $file = $request->file('Regcertificate');

            if ($serviceprovider->Regcertificate) {
                Storage::delete($serviceprovider->Regcertificate);
            }

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Regcertificate = $fileName;
            $serviceprovider->Regcertificate_url = "/uploads/".$fileName;
        }

        if($request->hasfile('Logo'))
        {
            $file = $request->file('Logo');

            if ($serviceprovider->Logo) {
                Storage::delete($serviceprovider->Logo);
            }

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Logo = $fileName;
            $serviceprovider->Logo_url =  "/uploads/".$fileName;
        }

        if($request->hasfile('Comcerregister'))
        {
            $file = $request->file('Comcerregister');

            if ($serviceprovider->Comcerregister) {
                Storage::delete($serviceprovider->Comcerregister);
            }

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Comcerregister = $fileName;
            $serviceprovider->Comcerregister_url =  "/uploads/".$fileName;
        }

        if($request->hasfile('Healthlicence'))
        {
            $file = $request->file('Healthlicence');

            // Delete the old image file if it exists
            if ($serviceprovider->Healthlicence) {
                Storage::delete($serviceprovider->Healthlicence);
            }

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $serviceprovider->Healthlicence = $fileName;
            $serviceprovider->Healthlicence_url =  "/uploads/".$fileName;
        }

        $serviceprovider->save();

       return redirect()->route('serviceproviders.index')
       ->with('success','ServiceProvider updated successfully');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProvider $serviceprovider)
    {
        //
       $serviceprovider->delete();

       return redirect()->route('serviceproviders.index')
       ->with('success','ServiceProvider deleted successfully');
   }

   public function updatestatus(Request $request)
   {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = ServiceProvider::findOrFail($id); // Change 'user_id' to the actual field name
        
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

    public function getHealthcare($id)
    {
        // Find the related model by ID
        $Healthcare = ServiceProvider::where('id', $id)->get();

        // If the related model doesn't exist, return an empty response or an error message
        if (!$Healthcare) {
            return response()->json(['error' => 'Healthcare records not found.'], 404);
        }
         // Return a success response with the created patient registration data
        return response()->json([
            'message' => 'Fetch Healthcare records successfully',
            'Healthcare_records' => $Healthcare,
        ], 200);
    }
}
