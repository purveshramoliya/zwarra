<?php

namespace App\Http\Controllers;
use App\Models\SubServices;
use App\Models\OurServices;
use App\Models\ServiceProvider;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index(Request $request)
    {
    $query = Offers::query();

    // Check if search query exists
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('Name', 'LIKE', "%$searchTerm%");
    }

    // Get paginated offers
    $offer = $query->latest()->paginate(20);

    return view('admin.offers.index', compact('offer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
        return view('admin.offers.create', compact('sdropdownOptions','ssdropdownOptions'));
    }

    public function fetchOptions()
    {
        // Your logic to fetch options goes here
        $dropdownOptions = ServiceProvider::all();

       // Return the options as JSON response
        return response()->json($dropdownOptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Debugging to check the data coming from the form
       // dd($request->all());
        //
        $request->validate([
            'Name' => 'required',
            'Type' => 'required',
            'Servicename' => 'required',
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            //'Logo' => 'required|mimes:jpg,png|max:2048',
        ]);

        if($request->hasfile('Logo'))
        {
            $file = $request->file('Logo');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/",$fileName);
            //$ourservices->Logo = $fileName;
            $offer->Logo =  "/uploads/".$fileName;
        }


        $selectedValues = $request->input('selectedValues');


        $pairs = explode(",", $selectedValues);

        // Initialize arrays to store extracted values
        $numbers = [];
        $texts = [];

        // Iterate over each pair
        foreach ($pairs as $pair) {

             // Split each pair into key and value using colon as a delimiter
            $data = explode(':', $pair);
            
        // Ensure the pair has both key and value
            if (count($data) == 2) {
                $Healthcare = $data[0];
                $Healthcarename = $data[1];

         // Store file information in the database
         // $offer = new Offers();
         // Offers::create($request->all());

        // Store file information in the database
                $offer = new Offers();
                $offer->Name = $request->input('Name');
                $offer->Code = $request->input('Code');
                $offer->Percantage = $request->input('Percantage');
                $offer->Count = $request->input('Count');
                $offer->Type = $request->input('Type');
                $offer->Servicename = $request->input('Servicename');
                $offer->Subservicename = $request->input('Subservicename');
                $offer->Healthcare = $Healthcare;
                $offer->Healthcarename = $Healthcarename;

        // Debugging to check the data assigned to the model
         //dd($offer);

                try {
                    $offer->save();
                } catch (\Exception $e) {
        dd($e->getMessage()); // or log the error message
    }
}
}

return redirect()->route('offers.index')
->with('success','Offer created successfully.');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(Offers $offer)
    {
        //
        $spOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
        return view('admin.offers.show', compact('offer','sdropdownOptions','ssdropdownOptions','spOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(Offers $offer)
    {
        //
        $spOptions = ServiceProvider::all();
        $sdropdownOptions = OurServices::all();
        $ssdropdownOptions = SubServices::all();
        return view('admin.offers.edit', compact('offer','sdropdownOptions','ssdropdownOptions','spOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offers $offer)
    {
        //
       $request->validate([
        'Name' => 'required',
        'Servicename' => 'required',
    ]);

       // Update other attributes
        $offer->update($request->except('Logo')); // Update all attributes except Logo

        // Handle file upload if a new file is provided
        if ($request->hasFile('Logo')) {
            // Delete the old image file if it exists
            if ($offer->Logo) {
                Storage::delete($offer->Logo);
            }

            // Upload the new image file
            $file = $request->file('Logo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move(public_path()."/uploads/", $fileName);
            $offer->Logo = "/uploads/" . $fileName; // Update the Logo attribute   
        }

     $offer->save(); // Save the changes to the database

       return redirect()->route('offers.index')
       ->with('success','Offer updated successfully');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offers $offer)
    {
        //
       $offer->delete();

       return redirect()->route('offers.index')
       ->with('success','Offer deleted successfully');
   }

   public function updatestatus(Request $request)
   {
    $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = Offers::findOrFail($id); // Change 'user_id' to the actual field name
        
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
