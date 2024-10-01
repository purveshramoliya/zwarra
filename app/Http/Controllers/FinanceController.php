<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    //
    public function refundPayments(Request $request)
    {
        return view('admin.finance.refund_payments');
    }
    public function completePayments(Request $request)
    {
        return view('admin.finance.complete_payments');
    }
    public function incompleteBookings(Request $request)
    {
        return view('admin.finance.incomplete_bookings');
    }
}
