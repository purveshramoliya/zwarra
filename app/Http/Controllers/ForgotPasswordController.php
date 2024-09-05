<?php
namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use SadiqSalau\LaravelOtp\Facades\Otp;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Password;
use SadiqSalau\LaravelOtpPassword\Facades\OtpPassword;
use App\Services\SmsService;
use Illuminate\Auth\Events\PasswordReset;

class ForgotPasswordController extends Controller
{
    protected $smsService;

    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }

    public function showForgotPasswordForm()
    {
        return view('admin.auth.forgot-password');
    }

    public function sendEmailOTP(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = OtpPassword::sendOTP($request->only('email'));

        if ($status === OtpPassword::OTP_SENT) {
        $request->session()->put('email', $request->email);
        return redirect()->route('verify.otp')->with('status', trans($status))->with(['email' => $request->email]);
        } else {
            return back()->withErrors(['email' => trans($status)]);
        }
    }

    private function generateNumericOTP($length = 4)
    {
        $otp = '';
        $characters = '0123456789';

        for ($i = 0; $i < $length; $i++) {
            $otp .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $otp;
    }

    public function sendPhoneOTP(Request $request)
    {
        $request->validate(['phone' => 'required|string']);

        $phone = $request->input('phone');

        // Generate a new numeric OTP
        $otp = $this->generateNumericOTP();

        // Store OTP and phone number in session for verification
        Session::put('otp', $otp);
        $request->session()->put('phone', $request->phone);

        // Prepare the message
        $message = "Hello!\n\nYour OTP verification code is: $otp\n\nThank you for using our application!\n\nRegards,\nZwarra";


        // Send SMS
        $response = $this->smsService->sendSms($phone, $message);

        return redirect()->route('verify.otp')->with(['phone' => $request->phone]);
    }

    public function showOTPVerificationForm()
    {
        return view('admin.auth.verify-otp');
    }

    public function verifyOTP(Request $request)
    {
        $request->validate(['otp' => 'required']);

        $enteredOTP = $request->input('otp');
        $storedOTP = Session::get('otp');

        // First, check if the entered OTP matches the session-based OTP
        if ($enteredOTP == $storedOTP) {
            return redirect()->route('reset.password')->with('phone', $request->phone);
        }


        if($request->email){
            // Second, check if the entered OTP matches the email-based OTP
            $isValidOTP = Otp::identifier($request->email)->attempt($request->otp);
            if ($isValidOTP['status'] == Otp::OTP_PROCESSED) {
                return redirect()->route('reset.password')->with('email', $request->email);
            }
        }

         // If neither condition is met, redirect back with an error
    return back()->withErrors(['otp' => 'Invalid OTP. Please try again.'])->with('email', $request->email)->with('phone', $request->email);
}


    public function showResetPasswordForm(Request $request)
    {
        return view('admin.auth.reset-password');
    }

    public function resetPassword(Request $request)
   {
    $request->validate([
        'password' => 'required|confirmed|min:8',
    ]);

    $phone = $request->phone;
    $email = $request->email;


    if ($phone) {
        $user = Users::where('phone', $phone)->first();
    } elseif ($email) {
        $user = Users::where('email', $email)->first();
    }

    if (!$user) {
        return back()->withErrors(['email' => 'User not found.']);
    }

    $user->forceFill([
        'password' => Hash::make($request->password),
        'remember_token' => Str::random(60),
    ])->save();

    event(new PasswordReset($user));

    return redirect()->route('login')->with('status', 'Password reset successfully.');
}


    public function resendOTP(Request $request)
    {

        if ($request->phone) {
          $request->validate(['phone' => 'required|string']);

          $phone = $request->input('phone');

    // Generate a new OTP
          $otp = $this->generateNumericOTP();

    // Update OTP and phone number in session for verification
          Session::put('otp', $otp);
          Session::put('phone', $phone);

        // Prepare the message
        $message = "Hello!\n\nYour OTP verification code is: $otp\n\nThank you for using our application!\n\nRegards,\nZwarra";

    // Send SMS
          $response = $this->smsService->sendSms($phone, $message);

          if ($response) {
            return redirect()->back()->with('success', 'New OTP has been sent to your phone.')->with('phone', $phone);
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to resend OTP. Please try again later.'])->with('phone', $phone);
        }
    } elseif ($request->email) {

        $request->validate(['email' => 'required|string|email|max:255']);

        $otp = Otp::identifier($request->email)->update();

        if ($otp['status'] != Otp::OTP_SENT) {
            return Redirect::back()->withErrors(['error' => 'Failed to resend OTP. Please try again later.'])->with('email', $request->email);
        } else {
            return Redirect::back()->with('success', 'New OTP has been sent to your email.')->with('email', $request->email);
        }
    }
}

}
