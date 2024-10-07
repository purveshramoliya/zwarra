<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // Fetch all privacy policies from the database
        $privacypolicy = PrivacyPolicy::all();
        return view('admin.privacypolicys.index', compact('privacypolicy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.privacypolicys.create');
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
            'Tcenglish' => 'required|string',
        ]);

         // Store file information in the database
        $privacypolicy = new PrivacyPolicy();
        $privacypolicy->Name = $request->input('Name');
        $privacypolicy->Tcenglish = $request->input('Tcenglish');
        $privacypolicy->Tcarabic = $request->input('Tcarabic');
        $privacypolicy->Status = 1;
        $privacypolicy->save();

        return redirect()->route('privacypolicys.index')
        ->with('success','Privacy & Policy created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(PrivacyPolicy $privacypolicy)
    {
        //
     return view('admin.privacypolicys.show',compact('privacypolicy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(PrivacyPolicy $privacypolicy)
    {
        //
     return view('admin.privacypolicys.edit',compact('privacypolicy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrivacyPolicy $privacypolicy)
    {
        //
     $request->validate([
        'Name' => 'required',
    ]);

     $privacypolicy->update($request->all());

     return redirect()->route('privacypolicys.index')
     ->with('success',' Privacy & Policy updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrivacyPolicy $privacypolicy)
    {
        //
     $privacypolicy->delete();

     return redirect()->route('privacypolicys.index')
     ->with('success',' Privacy & Policy deleted successfully');
    }

    public function updatestatus(Request $request)
    {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = PrivacyPolicy::findOrFail($id); // Change 'user_id' to the actual field name
        
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

    // Method to retrieve the current PrivacyPolicy
    public function GetPrivacypolicy()
    {
        $privacyPolicy = PrivacyPolicy::where('Status', 1)->first(['id','Name','Tcenglish','Tcarabic']);

        if (!$privacyPolicy) {
            return response()->json(['error' => 'No active privacy policy found'], 404);
        }

        return response()->json($privacyPolicy);
    }

    
    // Method to retrieve the current PrivacyPolicy
    public function GetAllPrivacypolicy()
    {
        $privacyPolicy = PrivacyPolicy::where('Status', 1)->get(['id','Name','Tcenglish','Tcarabic']);

        if (!$privacyPolicy) {
            return response()->json(['error' => 'No active privacy policy found'], 404);
        }

        return response()->json($privacyPolicy);
    }
}
