<?php

namespace App\Http\Controllers;

use App\Models\TermCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TermConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
    // Fetch all privacy policies from the database
    $termcondition = TermCondition::all();

    // Pass the fetched policies data to the view
    return view('admin.termconditions.index', compact('termcondition'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.termconditions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|unique:termcondition,Name',
            'Tcenglish' => 'required|string',
          
        ]);

         // Store file information in the database
        $termcondition = new TermCondition();
     
        $termcondition->Name = $request->input('Name');
        $termcondition->Tcenglish = $request->input('Tcenglish');
        $termcondition->Tcarabic = $request->input('Tcarabic');
        $termcondition->Status = 1;

        $termcondition->save();

        return redirect()->route('termconditions.index')
        ->with('success','Terms & Conditions created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */

    public function edit(TermCondition $termcondition)
    {
     return view('admin.termconditions.edit',compact('termcondition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TermCondition $termcondition)
    {

     $request->validate([
        'Tcenglish' => 'required',
    ]);

     // Update the specified term condition with the request data
    $termcondition->update([
        'Name' => $request->input('Name'),
        'Tcenglish' => $request->input('Tcenglish'),
        'Tcarabic' => $request->input('Tcarabic'), // Update to match the new field name
        // Add other fields here if needed
    ]);

     return redirect()->route('termconditions.index')
     ->with('success',' Terms & Conditions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */

    public function updatestatus(Request $request)
    {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = TermCondition::findOrFail($id); // Change 'user_id' to the actual field name
        
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

    public function GetTermcondition(Request $request)
    {
            // Validate the request
            $request->validate([
                'name' => 'required|string',
            ]);
    
            $name = $request->query('name');
    
            // Fetch the terms and conditions with status = 1
            $termCondition = TermCondition::where('Name', $name)
                ->where('Status', 1)
                ->first(['id','Name','Tcenglish', 'Tcarabic']); // Select only the necessary columns
    
            if (!$termCondition) {
                return response()->json(['error' => 'Terms and conditions not found or inactive'], 404);
            }
    
            return response()->json($termCondition);
        }
}
