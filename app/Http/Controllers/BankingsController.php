<?php

namespace App\Http\Controllers;

use App\Models\Bankings;
use App\Models\AllDoctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BankingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
    $query = Bankings::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('Doctor', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $banking = $query->latest()->paginate(20);

    return view('admin.bankings.index', compact('banking'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dropdownOptions = AllDoctors::all();
        return view('admin.bankings.create',compact('dropdownOptions'));
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
            'Name' => 'required',
            'Doctor' => 'required',
            
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            //'Logo' => 'required|mimes:jpg,png|max:2048',

        ]);

         // Store file information in the database
         $banking = new Bankings();
         $banking->Name = $request->input('Name');
         $banking->Doctor = $request->input('Doctor');
         $banking->Serviceprovider = $request->input('Serviceprovider');
         $banking->Email = $request->input('Email');
         $banking->Phone = $request->input('Phone');
         $banking->Accountname = $request->input('Accountname');
         $banking->Accountnumber = $request->input('Accountnumber');
         $banking->Bankname = $request->input('Bankname');
         $banking->Ibannumber = $request->input('Ibannumber');
        


        if($request->hasfile('Logo'))
         {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            $banking->Logo =  "/uploads/".$fileName;
         }

         $banking->save();        

         // Store file information in the database
          // $banking = new Bankings();
          // Bankings::create($request->all());

        return redirect()->route('bankings.index')
                        ->with('success','Banking Information created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(Bankings $banking)
    {
        //
         $dropdownOptions = AllDoctors::all();
        return view('admin.bankings.show',compact('banking','dropdownOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(Bankings $banking)
    {
        //
        $dropdownOptions = AllDoctors::all();
        return view('admin.bankings.edit',compact('banking','dropdownOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bankings $banking)
    {
        //
         $request->validate([
            'Name' => 'required',
        ]);
    
        $banking->update($request->all());
    
        return redirect()->route('bankings.index')
                        ->with('success','Banking Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bankings $banking)
    {
        //
         $banking->delete();
    
        return redirect()->route('bankings.index')
                        ->with('success','Banking Information deleted successfully');
    }
}
