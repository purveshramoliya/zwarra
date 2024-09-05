<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\ServiceProvider;
use App\Models\Bankings;
use App\Models\OurServices;
use App\Models\SubServices;
use App\Models\Practitioners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class HealthcareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //   return view('healthcare.index');
    // }


   public function showprofile()
    {
        // Get the current logged-in user ID using the serviceprovider guard
        $id = Auth::guard('serviceprovider')->id();

        // Check if the ID is not null
        if ($id !== null) {
            // Retrieve the ServiceProvider record
            $serviceprovider = ServiceProvider::find($id);
            $bankings =  Bankings::where('Healthcare', $id)->first();

            // Check if the ServiceProvider record exists
            if ($serviceprovider !== null ) {
                // If the ServiceProvider record exists, return the view with the data
                return view('healthcare.profile.healthcareprofile', compact('serviceprovider','bankings'));
            }
        }

        // If the ID is null or the ServiceProvider record doesn't exist, you can handle the error here
        return redirect()->back()->with('error', 'Failed to retrieve profile data.');
    }

    public function profile()
    {
     return view('healthcare.profile.healthcareprofile');
    }

    public function setting()
    {
        $dropdownOptions = Practitioners::all();
        $id = Auth::guard('serviceprovider')->id();
        $profileData = Bankings::where('Healthcare', $id)->first();
        $schedule = DB::table('scheduleconfiguration')
        ->select('Dayname', 'Servicetype', 'Starttime', 'Endtime') // Adjust columns as per your table structure
        ->orderByRaw("CASE 
                        WHEN Dayname = 'Monday' THEN 1 
                        WHEN Dayname = 'Tuesday' THEN 2 
                        WHEN Dayname = 'Wednesday' THEN 3 
                        WHEN Dayname = 'Thursday' THEN 4 
                        WHEN Dayname = 'Friday' THEN 5 
                        WHEN Dayname = 'Saturday' THEN 6 
                        WHEN Dayname = 'Sunday' THEN 7 
                    END")
        ->get()
        ->groupBy('Dayname');
        return view('healthcare.profile.healthcaresetting',compact('id','schedule','profileData','dropdownOptions'));
    }

    public function updatehealthcareinfo()
    {
     return view('healthcare.profile.updatehealthcareinfo');
    }

    public function updatebankaccount()
    {
        return view('healthcare.profile.updatebankaccount');
    }

    public function reports()
    {
     return view('healthcare.reports.index');
    }

    public function locations()
    {
     return view('healthcare.locations.index');
    }

    public function location()
    {
     return view('healthcare.location.index');
    }

    public function bookings()
    {
     return view('healthcare.bookings.index');
    }
}
