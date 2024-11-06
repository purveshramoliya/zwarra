<?php

namespace App\Http\Controllers;
use App\Models\Bookings;

use App\Models\HeaderBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeaderPaymentsController extends Controller
{
    public function index()
    {
        $userId = Auth::guard('serviceprovider')->id();
        $booking = Bookings::where('healthcare', $userId)->paginate(10); 
        return view('healthcare.payments.index',compact('booking'));
    }
}
