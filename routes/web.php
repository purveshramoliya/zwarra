<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\OurServicesController;
use App\Http\Controllers\SubServicesController;
use App\Http\Controllers\MedicalSpecialtiesController;
use App\Http\Controllers\SubMedicalSpecialtiesController;
use App\Http\Controllers\AllDoctorsController;
use App\Http\Controllers\DoctorPositionsController;
use App\Http\Controllers\JoinDoctorRequestController;
use App\Http\Controllers\PatientRegistrationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\BankingsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ServiceProviderRequestController;
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\GeneralJoinRequestController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PractitionersController;

use App\Http\Controllers\HealthcareController;
use App\Http\Controllers\AdminHealthcareServiceController;
use App\Http\Controllers\HealthcareSubserviceController;
use App\Http\Controllers\HealthcareSettingsController;
use App\Http\Controllers\DoctorSettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\HealthcareZoneController;
use App\Http\Controllers\PaymentsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('/customer-reviews', [CustomerReviewController::class, 'index']);

//Route::resource('services', ServicesController::class);
//Route::get('services/{id}', [ServicesController::class, 'index']);

// Example for Admin Dashboard
Route::middleware(['auth:web'])->group(function () {
    Route::post('/save', [ZoneController::class, 'saveZonemap']);
    Route::get('/getrectangles', [ZoneController::class, 'getRectangles']);

    Route::get('/admin/dashboard', [DashboardController::class, 'adminIndex'])->name('admin.dashboard');

    Route::resource('admin/serviceproviders', ServiceProviderController::class);
    Route::resource('admin/ourservices', OurServicesController::class);
    Route::resource('admin/subservices', SubServicesController::class);
    Route::resource('admin/medicalspecialties', MedicalSpecialtiesController::class);
    Route::resource('admin/submedicalspecialties', SubMedicalSpecialtiesController::class);
    Route::resource('admin/alldoctors', AllDoctorsController::class);
    Route::resource('admin/doctorpositions', DoctorPositionsController::class);
    Route::resource('admin/doctorrequest', JoinDoctorRequestController::class);
    Route::resource('admin/patientregistration', PatientRegistrationController::class);
    Route::resource('admin/users', UsersController::class);
    Route::resource('admin/offers', OffersController::class);
    Route::resource('admin/bookings', BookingsController::class);
    Route::resource('admin/bankings', BankingsController::class);
    Route::resource('admin/contacts', ContactsController::class);
    Route::resource('admin/complaints', ComplaintsController::class);
    Route::resource('admin/zones', ZoneController::class);
    Route::resource('admin/termconditions', TermConditionController::class);
    Route::resource('admin/privacypolicys', PrivacyPolicyController::class);
    Route::resource('admin/serviceproviderrequest', ServiceProviderRequestController::class);
    Route::resource('admin/generaljoinrequest', GeneralJoinRequestController::class);
    Route::resource('admin/images', ImageController::class);
    Route::resource('admin/practitioners', PractitionersController::class);
    Route::resource('admin/payments', PaymentsController::class);


    //Route::get('healthcare/services', [HealthcareSubserviceController::class,'index']);
    Route::get('admin/subservice/createbody', [SubServicesController::class, 'createbody'])->name('subservices.createbody');
    Route::get('admin/subservice/singleservices', [SubServicesController::class, 'single'])->name('subservices.single');
    Route::get('admin/serviceprovider/{status}', [ServiceProviderController::class,'showStatus'])->name('serviceproviders.status');
    Route::get('admin/payments/{status}', [PaymentsController::class,'showStatus'])->name('payments.status');
    Route::get('admin/subservice/packages', [SubServicesController::class, 'package'])->name('subservices.packages');
    Route::get('admin/subservice/packageservices', [SubServicesController::class, 'packageservices'])->name('subservices.packageservices');
    Route::get('admin/patient/{status}', [PatientRegistrationController::class,'showStatus'])->name('patient.status');
    Route::get('admin/patient/{type}', [PatientRegistrationController::class,'showStatus'])->name('patient.type');
    Route::get('admin/booking/{status}', [BookingsController::class,'showStatus'])->name('bookings.status');
    Route::get('admin/user/{status}', [UsersController::class,'showStatus'])->name('users.status');
    Route::get('admin/generalrequest/{type}', [GeneralJoinRequestController::class, 'showType'])->name('generalrequest.type');

    // Route to display the form/view
    Route::get('admin/locations', [LocationController::class, 'index'])->name('locations.index');
    Route::get('admin/zonelist', [ZoneController::class, 'zonelist'])->name('zone.zonelist');
    Route::post('admin/locations/country', [LocationController::class, 'storeCountry'])->name('locations.storeCountry');
    Route::post('admin/locations/city', [LocationController::class, 'storeCity'])->name('locations.storeCity');
    Route::post('admin/locations/zone', [LocationController::class, 'storeZone'])->name('locations.storeZone');
    Route::post('admin/locations/get-cities', [LocationController::class, 'getCities'])->name('locations.getCities');

    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
});

Route::get('admin/get-cities-by-country/{country_id}', [LocationController::class, 'getCitiesByCountry'])->name('getCitiesByCountry');
Route::get('/admin/get-zones-by-city/{city_id}', [LocationController::class, 'getZonesByCity'])->name('getZonesByCity');


// Service Provider routes
Route::middleware(['auth:serviceprovider'])->group(function () {
    Route::post('/hsave', [HealthcareZoneController::class, 'hsaveZonemap']);
    Route::get('/hgetrectangles', [HealthcareZoneController::class, 'hgetRectangles']);

      Route::get('/healthcare/dashboard/{status?}', [DashboardController::class, 'healthcareIndex'])
        ->name('healthcare.dashboard');

    Route::resource('healthcare/services', HealthcareSubserviceController::class);

    Route::get('healthcare/service/createbody', [HealthcareSubserviceController::class, 'createbody'])->name('services.createbody');

    Route::get('healthcare/service', [HealthcareSubserviceController::class, 'index'])->name('healthcare.services.index');
    Route::get('healthcare/service/create', [HealthcareSubserviceController::class, 'create'])->name('healthcare.services.create');
    Route::post('healthcare/service', [HealthcareSubserviceController::class, 'store'])->name('healthcare.services.store');
    Route::get('healthcare/service/{id}', [HealthcareSubserviceController::class, 'show'])->name('healthcare.services.show');
    Route::get('healthcare/service/{id}/edit', [HealthcareSubserviceController::class, 'edit'])->name('healthcare.services.edit');
    Route::put('healthcare/service/{id}', [HealthcareSubserviceController::class, 'update'])->name('healthcare.services.update');
    Route::delete('healthcare/service/{id}', [HealthcareSubserviceController::class, 'destroy'])->name('healthcare.services.destroy');

    Route::get('healthcare/profile', [HealthcareController::class,'profile']);
    Route::get('healthcare/updateinfo', [HealthcareController::class,'updatehealthcareinfo']);
    Route::get('healthcare/updatebankaccount', [HealthcareController::class,'updatebankaccount']);
    Route::get('healthcare/updatepassword', [HealthcareController::class,'updatepasswordview']);
    Route::get('healthcare/reports', [HealthcareController::class,'reports']);
    Route::get('healthcare/locations', [HealthcareZoneController::class,'locations']);
    Route::get('healthcare/bookings', [HealthcareController::class,'bookings']);
    Route::get('healthcare/settings', [HealthcareController::class, 'setting'])->name('healthcare.settings');
    Route::get('healthcare/zones', [HealthcareZoneController::class, 'index'])->name('healthcare.zones.index');


    Route::post('healthcare/settings/banking', [HealthcareSettingsController::class, 'store'])->name('healthcare.banking.store');
    Route::post('healthcare/settings/updatepassword', [HealthcareSettingsController::class, 'updatepassword'])->name('healthcare.password.update');
    Route::post('healthcare/settings/config', [HealthcareSettingsController::class, 'configstore'])->name('healthcare.config.store');
    Route::get('healthcare/profile/show', [HealthcareController::class, 'showprofile'])->name('healthcare.profile.healthcareprofile');
    Route::get('healthcare/profile/settings', [HealthcareController::class, 'setting'])->name('healthcare.profile.healthcaresetting');

    Route::post('healthcare/locations/country', [LocationController::class, 'storeCountry'])->name('locations.hstoreCountry');
    Route::post('healthcare/locations/city', [LocationController::class, 'storeCity'])->name('locations.hstoreCity');
    Route::post('healthcare/locations/zone', [LocationController::class, 'storeZone'])->name('locations.hstoreZone');
    Route::post('healthcare/locations/get-cities', [LocationController::class, 'getCities'])->name('locations.hgetCities');
    Route::get('/fetch-coordinates', [HealthcareZoneController::class, 'fetchCoordinates']);

    Route::get('healthcaresignout', [CustomAuthController::class, 'HealthcaresignOut'])->name('healthcare.signout');
});

// Doctor routes
Route::middleware(['auth:doctor'])->group(function () {
    Route::get('doctor/dashboard', [CustomAuthController::class, 'doctordashboard'])->name('doctor.dashboard');

    Route::get('doctor/bookings', [DoctorSettingsController::class,'bookings']);
    Route::get('doctor/settings', [DoctorSettingsController::class, 'setting'])->name('doctor.settings');
    Route::get('doctor/dashboard/{status}', [CustomAuthController::class,'doctorshowStatus'])->name('doctordashboard.status');

    Route::get('doctor/profile/show', [DoctorSettingsController::class, 'showprofile'])->name('doctor.profile.show');
    Route::get('doctor/profile/settings', [DoctorSettingsController::class, 'setting'])->name('doctor.profile.setting');
    Route::post('doctor/settings/updatepassword', [DoctorSettingsController::class, 'updatepassword'])->name('doctor.password.update');

    Route::post('doctor/settings/config', [DoctorSettingsController::class, 'configstore'])->name('doctor.config.store');
    Route::post('doctor/settings/banking', [DoctorSettingsController::class, 'store'])->name('doctor.banking.store');

    Route::get('doctorsignout', [CustomAuthController::class, 'DoctorsignOut'])->name('doctor.signout');
});


Route::get('/', [CustomAuthController::class, 'index'])->name('user.login');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot.password');
Route::post('forgot-password/email', [ForgotPasswordController::class, 'sendEmailOTP'])->name('password.email');
Route::post('forgot-password/phone', [ForgotPasswordController::class, 'sendPhoneOTP'])->name('password.phone');
Route::get('verify-otp', [ForgotPasswordController::class, 'showOTPVerificationForm'])->name('verify.otp');
Route::post('verify-otp', [ForgotPasswordController::class, 'verifyOTP'])->name('verify.otp.post');
Route::get('reset-password', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password.post');
Route::post('resend-otp', [ForgotPasswordController::class, 'resendOTP'])->name('resend.otp');



Route::post('spupdate-status', [ServiceProviderController::class,'updatestatus'])->name('spupdate.status');
Route::post('supdate-status', [ServicesController::class,'updatestatus'])->name('supdate.status');
Route::post('osupdate-status', [OurServicesController::class,'updatestatus'])->name('osupdate.status');
Route::post('ssupdate-status', [SubServicesController::class,'updatestatus'])->name('ssupdate.status');
Route::post('msupdate-status', [MedicalSpecialtiesController::class,'updatestatus'])->name('msupdate.status');
Route::post('smupdate-status', [SubMedicalSpecialtiesController::class,'updatestatus'])->name('smupdate.status');
Route::post('docupdate-status', [AllDoctorsController::class,'updatestatus'])->name('docupdate.status');
Route::post('drupdate-status', [JoinDoctorRequestController::class,'updatestatus'])->name('drupdate.status');
Route::post('oupdate-status', [OffersController::class,'updatestatus'])->name('oupdate.status');
Route::post('zupdate-status', [ZoneController::class,'updatestatus'])->name('zupdate.status');
Route::post('srupdate-status', [ServiceProviderRequestController::class,'updatestatus'])->name('srupdate.status');
Route::post('tcupdate-status', [TermConditionController::class,'updatestatus'])->name('tcupdate.status');
Route::post('pupdate-status', [PrivacyPolicyController::class,'updatestatus'])->name('pupdate.status');
Route::post('prupdate-status', [PatientRegistrationController::class,'updatestatus'])->name('prupdate.status');
Route::post('uupdate-status', [UsersController::class,'updatestatus'])->name('uupdate.status');
Route::post('dupdate-status', [CustomAuthController::class,'updatestatus'])->name('dupdate.status');
Route::post('gupdate-status', [GeneralJoinRequestController::class,'updatestatus'])->name('gupdate.status');
Route::post('prcupdate-status', [PractitionersController::class,'updatestatus'])->name('prcupdate.status');
Route::post('hzoneupdate-status', [HealthcareZoneController::class,'updatestatus'])->name('hzoneupdate.status');
Route::put('/bookings/{id}', [BookingsController::class, 'updatestatus'])->name('bookings.update');



Route::get('/fetch-options', [OffersController::class, 'fetchOptions'])->name('fetch.options');
Route::delete('attachments/{id}', [AllDoctorsController::class, 'deleteAttachment'])->name('attachments.delete');
Route::get('/get-profile-data', [HealthcareSettingsController::class, 'getProfileData'])->name('getProfileData');

