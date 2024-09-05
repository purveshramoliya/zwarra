<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contacts::latest()->paginate(5);
    
        return view('admin.contacts.index',compact('contact'))
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
        return view('admin.contacts.create');
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
            'Subject' => 'required',
        ]);

         // Store file information in the database
          $contact = new Contacts();
          Contacts::create($request->all());

        return redirect()->route('contacts.index')
                        ->with('success','Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contact)
    {
        //
         return view('admin.contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contact)
    {
        //
         return view('admin.contacts.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contact)
    {
        //
         $request->validate([
            'Subject' => 'required',
        ]);
    
        $contact->update($request->all());
    
        return redirect()->route('contacts.index')
                        ->with('success','Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contact)
    {
        //
         $contact->delete();
    
        return redirect()->route('contacts.index')
                        ->with('success','Contact deleted successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function supports(Request $request)
    {
        // Decode JSON payload
        $requestData = $request->all();

        if (!$requestData) {
            // Handle case where registration data is missing from session
            return response()->json(['error' => 'data is missing.'], 400);
        }

        // Validation for step 4
        $validator = Validator::make($request->all(), [
            'Email' => 'required', // unique rule added
            'Phone' => 'required',
            'Message' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Now you can store $registrationData in the database
        $Registration = Contacts::create($requestData);

        // Return a success response with the created patient registration data
        return response()->json([
            'message' => 'Created Support request successfully',
            'supports' => $Registration,
        ], 200);
    }
}
