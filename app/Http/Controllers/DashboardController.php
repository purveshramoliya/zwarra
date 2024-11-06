<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function adminIndex()
    {
        $totalBookings = DB::table('bookings')->count();
        $cancelledBookings = DB::table('bookings')->where('Status', 'Cancelled')->count();
        $approvedBookings = DB::table('bookings')->where('Status', 'Approved')->count();
        $totalDoctors = DB::table('alldoctors')->where('Status', 1)->count();
        $totalServiceProviders = DB::table('serviceprovider')->where('Status', 1)->count();
        $completedBookings = DB::table('bookings')->where('Status', 'Completed')->count();

        // Calculate the sum of the prices for completed bookings
        $totalrevenue = DB::table('bookings')
        ->where('Status', 'Completed')
        ->sum('Price');

         // Get today's date
        $today = date('Y-m-d');

        // Calculate the sum of the prices for completed bookings that occurred today
        $dailyCompleted = DB::table('bookings')
        ->where('Status', 'Completed')
        ->whereDate('created_at', $today) // Filter by today's date
        ->count(); 

         // Calculate the sum of the prices for completed bookings that occurred today
         $dailyCancelled = DB::table('bookings')
         ->where('Status', 'Cancelled')
         ->whereDate('created_at', $today) // Filter by today's date
         ->count(); 

          // Calculate the sum of the prices for completed bookings that occurred today
          $dailyApproved = DB::table('bookings')
          ->where('Status', 'Approved')
          ->whereDate('created_at', $today) // Filter by today's date
          ->count(); 

           // Calculate the sum of the prices for completed bookings that occurred today
         $dailyRefund = DB::table('bookings')
         ->where('Status', 'Refund')
         ->whereDate('created_at', $today) // Filter by today's date
         ->count(); 

        return view('admin.dashboard', [
            'totalBookings' => $totalBookings,
            'approvedBookings' => $approvedBookings,
            'completedBookings' => $completedBookings,
            //'incompletedBookings' => $incompletedBookings,
            //'refundedBookings' => $refundedBookings,
            'cancelledBookings' => $cancelledBookings,
            'totalDoctors' => $totalDoctors,
            'totalServiceProviders' => $totalServiceProviders,
            'totalrevenue' => $totalrevenue,
            'dailyCompleted' =>$dailyCompleted,
            'dailyCancelled' => $dailyCancelled,
            'dailyApproved' =>$dailyApproved,
            'dailyRefund' => $dailyRefund,
        ]);
    }

    public function healthcareIndex($status = null)
{
    $userId = Auth::guard('serviceprovider')->id();
    
    // Fetching overall statistics
    $totalBookings = DB::table('bookings')
    ->where('Healthcare', 'jitesh')
    ->where('Status', 'Created')
    ->count();

    $approvedBookings = DB::table('bookings')->where('Status', 'Approved')->count();
    $cancelledBookings = DB::table('bookings')->where('Status', 'Cancelled')->count();

    // Fetching filtered bookings based on status
    if ($status) {
        $booking = Bookings::where('healthcare', $userId)
                        ->where('status', $status)
                        ->paginate(10);
    } else {
        $booking = Bookings::where('healthcare', $userId)->paginate(10);
    }
    
    return view('healthcare.dashboard', compact('booking', 'totalBookings', 'approvedBookings', 'cancelledBookings'));
}
public function decline(){
    return view('healthcare.decline');
}

}
