<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bookingsDeclineController extends Controller
{
    //
    public function decline()
    {
        return view('admin.bookings.decline');
    }
}
