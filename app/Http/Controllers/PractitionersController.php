<?php

namespace App\Http\Controllers;

use App\Models\Practitioners;
use Illuminate\Http\Request;

class PractitionersController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $query = Practitioners::query();

    // Check if search query exists
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('Enname', 'LIKE', "%$searchTerm%");
        }

    // Get paginated offers
        $practitioner = $query->latest()->paginate(20);

        return view('admin.practitioners.index', compact('practitioner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.practitioners.create');
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
            'Enname' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            //'Logo' => 'required|mimes:jpg,png|max:2048',

        ]);

         // Store file information in the database
        $practitioner = new Practitioners();
        $practitioner->Enname = $request->input('Enname');
        $practitioner->Arname = $request->input('Arname');
        $practitioner->Status = $request->input('Status');

        $practitioner->save();

        return redirect()->route('practitioners.index')
        ->with('success','Practitioner created successfully.');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function show(Practitioners $practitioner)
    {
        //
       return view('admin.practitioners.show',compact('practitioner'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function edit(Practitioners $practitioner)
    {
        //
       return view('admin.practitioners.edit',compact('practitioner'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Practitioners $practitioner)
    {
        //
       $request->validate([
        'Enname' => 'required',
    ]);

      $practitioner->update($request->all());

     return redirect()->route('practitioners.index')
     ->with('success',' Practitioner updated successfully');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $Services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practitioners $practitioner)
    {
        //
       $practitioner->delete();

       return redirect()->route('practitioners.index')
       ->with('success',' Practitioners deleted successfully');
   }

   public function updatestatus(Request $request)
   {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = Practitioners::findOrFail($id); // Change 'user_id' to the actual field name
        
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

}
