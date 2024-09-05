<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Bookings::query();

        // Check if search query exists
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('Healthcare', 'LIKE', "%$searchTerm%");
        }
    
        // Get paginated offers
        $booking = $query->latest()->paginate(20);
    
        return view('admin.bookings.index',compact('booking'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Servicename' => 'required|string',
            'Subservices' => 'required|json',
            'Qty' => 'required|integer',
            'Address' => 'required|string',
            'Date' => 'required|date',
            'Timeslot' => 'required|string',
            'Healthcare' => 'required|string',
            'Price' => 'required|numeric',
            'Patients' => 'required|json',
            'Description' => 'nullable',
            'Typeoftest' => 'nullable',
            'Typeofvisit' => 'nullable',
            'Gender' => 'nullable',
        ]);

        $booking = Bookings::create([
            'Servicename' => $validatedData['Servicename'],
            'Subservices' => $validatedData['Subservices'],
            'Qty' => $validatedData['Qty'],
            'Address' => $validatedData['Address'],
            'Date' => $validatedData['Date'],
            'Timeslot' => $validatedData['Timeslot'],
            'Healthcare' => $validatedData['Healthcare'],
            'Price' => $validatedData['Price'],
            'Patients' => $validatedData['Patients'],
            'Description' => $validatedData['Description'],
            'Typeoftest' => $validatedData['Typeoftest'],
            'Typeofvisit' => $validatedData['Typeofvisit'],
            'Gender' => $validatedData['Gender'],
        ]);

        // Return a success response with the created patient registration data
        return response()->json([
            'message' => 'Appointment created successfully',
            'Appointmentdetails' => $booking,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(Bookings $booking)
    {
        $Subservices = json_decode($booking->Subservices, true);
        $Patients = json_decode($booking->Patients, true);
         return view('admin.bookings.show',compact('booking','Subservices','Patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookings $booking)
    {
         return view('admin.bookings.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookings $booking)
    {
         $request->validate([
            'Servicename' => 'required',
        ]);
    
        $booking->update($request->all());
        return redirect()->route('bookings.index')
                        ->with('success','Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookings $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')
                        ->with('success','Booking deleted successfully');
    }


    /**
     * filter data for medical service **/
    public function showStatus($status)
    {
        // Retrieve service provider records based on the status with pagination
        $booking = Bookings::where('status', $status)->paginate(10);

        // If records were found, pass them to the view along with the status
        return view('admin.bookings.index', compact('booking', 'status'));
    }

    public function updatestatus(Request $request, $id)
    {
        $booking = Bookings::findOrFail($id);
        $booking->status = $request->input('status');
        if ($request->input('status') === 'Rejected') {
            $booking->Comments = $request->input('comment');
        } else {
            $booking->Comments = null; // Clear the comment if status is not rejected
        }
        $booking->save();

        return response()->json(['success' => 'Bookings status updated successfully.']);
    }

    public function getPatientAppointments($id)
    {
        // Find the related model by ID
        $bookings = Bookings::where('Patientid', $id)->get();

        // If the related model doesn't exist, return an empty response or an error message
        if (!$bookings) {
            return response()->json(['error' => 'Appointment records not found.'], 404);
        }
         // Return a success response with the created patient registration data
        return response()->json([
            'message' => 'Fetch Appointment records successfully',
            'appointment_records' => $bookings,
        ], 200);
    }

}
