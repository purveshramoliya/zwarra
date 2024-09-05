<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = Payments::query();

        // Check if search query exists
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('transacationid', 'LIKE', "%$searchTerm%");
        }

        // Get paginated offers
        $payment = $query->latest()->paginate(20);

       
        return view('admin.payments.index',compact('payment'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Store a newly created payment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        // Validate the incoming request data
       /* $validatedData = $request->validate([
            'transactionid' => 'nullable',
            'serviceid' => 'required',
            'servicename' => 'nullable',
            'subserviceid' => 'nullable',
            'subservicename' => 'nullable',
            'pacakgeid' => 'nullable',
            'pacakgename' => 'nullable',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'phone' => 'nullable',
            'email' => 'required|email',
            'address' => 'required',
            'country' => 'nullable',
            'city' => 'nullable',
            'healthcareid' => 'required',
            'paymentdate' => 'required|date',
            'bookingdate' => 'required|date',
            'timeslot' => 'nullable',
            'price' => 'required|numeric',
            'paymentmethod' => 'required',
            'accountno' => 'nullable',
            'cardholname' => 'nullable',
            'cardno' => 'nullable',
            'cardexpdate' => 'nullable|date_format:m/y',
            'cvvno' => 'nullable',
            'status' => 'nullable',
            'bookingstatus' => 'nullable',
            'comment' => 'nullable',
            'other' => 'nullable',
            'description' => 'nullable',
        ]);*/

        // Create a new Payment record
        $payment = Payments::create($request->all());

        // Optionally, you can log the creation or any other actions here

        // Return a JSON response indicating success
        return response()->json(['message' => 'Payment stored successfully', 'payment' => $payment], 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */

    public function show(Payments $payment)
    {
         return view('admin.payments.show',compact('payment'));
    }


    /**
     * filter data for medical service **/
    public function showStatus($status)
    {
        // Retrieve service provider records based on the status with pagination
        $payment = Payments::where('status', $status)->paginate(20);

        // If records were found, pass them to the view along with the status
        return view('admin.payments.index', compact('payment', 'status'));
    }


}
