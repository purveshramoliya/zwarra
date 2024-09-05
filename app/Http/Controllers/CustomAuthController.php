<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Users;
use App\Models\ServiceProvider;
use App\Models\Bookings;
use App\Models\AllDoctors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class CustomAuthController extends Controller
{

    public function index()
    {
        return view('admin.auth.login');
    }

    public function customLogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user from the users table
        $user = Users::where('email', $request->email)->first();

        if ($user && Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // If the user is authenticated from the users table, redirect to the user dashboard
            return redirect()->intended('admin/dashboard');
        }

        // Attempt to authenticate the user from the serviceproviders table
        $serviceprovider = ServiceProvider::where('email', $request->email)->first();
        // print_r($serviceprovider);
        // exit();
        if ($serviceprovider && Auth::guard('serviceprovider')->attempt(['email' => $request->email, 'password' => $request->password])) {
          
            // If the user is authenticated from the serviceproviders table, redirect to the service provider dashboard
            return redirect()->intended('healthcare/dashboard');
        }

        // Attempt to authenticate the user from the serviceproviders table
        $doctor = AllDoctors::where('email', $request->email)->first();

        if ($doctor && Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password])) {
          
            // If the user is authenticated from the serviceproviders table, redirect to the service provider dashboard
            return redirect()->intended('doctor/dashboard');
        }

        // If authentication fails for both roles, redirect back to the login page with an error message
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("login")->withErrors($validator);
    }


    public function registration()
    {
        return view('admin.auth.registration');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }


    public function create(array $data)
    {
      return Users::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    /* healthcare dashboard */
    public function healthcaredashboard()
    {
        $id = Auth::guard('serviceprovider')->id();
        // Get the currently authenticated healthcare user

        // Fetch appointments associated with the healthcare user
        $booking = Bookings::where('healthcare', $id)->get();

        return view('healthcare.dashboard',compact('booking','id'));
      
  
        //return redirect("login")->withSuccess('You are not allowed to access');
    }

    /* healthcare dashboard */
    public function doctordashboard()
    {
        $id = Auth::guard('doctor')->id();
        // Get the currently authenticated healthcare user

        // Fetch appointments associated with the healthcare user
        $booking = Bookings::where('doctor', $id)->get();

        return view('doctor.dashboard',compact('booking','id'));
    }

    /**
     * filter data for medical service **/
    public function showStatus($status)
    {
        // Get the currently authenticated healthcare user
        $id = Auth::guard('serviceprovider')->id(); // Assuming authentication
        
        // Fetch appointments associated with the healthcare user
        $booking = Bookings::where('healthcare', $id)
                    ->where('status', $status)
                    ->paginate(10);

        // If records were found, pass them to the view along with the status
        return view('healthcare.dashboard', compact('booking', 'status'));
    }

    /**
     * filter data for medical service **/
    public function doctorshowStatus($status)
    {
        // Get the currently authenticated healthcare user
        $id = Auth::guard('doctor')->id(); // Assuming authentication
        
        // Fetch appointments associated with the healthcare user
        $booking = Bookings::where('Doctor', $id)
                    ->where('status', $status)
                    ->paginate(10);

        // If records were found, pass them to the view along with the status
        return view('doctor.dashboard', compact('booking', 'status'));
    }

    public function updatestatus(Request $request)
    {
        $id = $request->input('id');

        // Retrieve the user or whatever model you're updating
        $updatestatus = Bookings::findOrFail($id); // Change 'user_id' to the actual field name
        
        // Update status logic here
        $status = $request->input('status');

        // Update the status in the database
        //$updatestatus->update(['Status' => $status]);
        if($status == 'true'){
            $status = 'Approved';
        }else{
            $status = 'Rejected';
        }
        $updatestatus->Status = $status;
        $updatestatus->save();

        // Respond with JSON
        return response()->json(['success' => true]);
    }

    /* end dashboard healthcare */
    public function signOut(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function HealthcaresignOut(Request $request)
    {
        Auth::guard('serviceprovider')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

     public function DoctorsignOut(Request $request)
    {
        Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

