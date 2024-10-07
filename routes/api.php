<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\ZwaaraServiceController;
use App\Http\Controllers\ServiceAddressController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ConsultingListController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LaborotaryServicesController;
use App\Http\Controllers\PatientRegistrationController;
use App\Http\Controllers\OurServicesController;
use App\Http\Controllers\SubServicesController;
use App\Http\Controllers\JoinDoctorRequestController;
use App\Http\Controllers\ServiceProviderRequestController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HealthcareSettingsController;
use App\Http\Controllers\GeneralJoinRequestController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\HealthcareZoneController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\BookingsAttachmentController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\PatientAddressController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API routes should also be protected if needed
Route::middleware(['auth:web'])->group(function () {
   
   // Route::post('/hsave', [HealthcareZoneController::class, 'hsaveZonemap']);
   // Route::get('/hgetrectangles', [HealthcareZoneController::class, 'hgetRectangles']);

});


Route::post('/register',[PatientRegistrationController::class, 'register']);

Route::post('/createappointment', [BookingsController::class, 'store']);
Route::post('appointment/{bookings}/attachments', [BookingsAttachmentController::class, 'store']);
Route::post('/createdoctorrequest', [JoinDoctorRequestController::class, 'registerdoctor']);
Route::post('/createhealthcarerequest', [ServiceProviderRequestController::class, 'registerhealthcare']);
Route::post('/creategeneralrequest', [GeneralJoinRequestController::class, 'RegisterGeneralJoinRequest']);
Route::post('/supportsrequest', [ContactsController::class, 'supports']);
Route::post('/registerpatient', [PatientRegistrationController::class, 'registerpatient']);
Route::get('/getpatients/{id}', [PatientRegistrationController::class, 'getpatients']);

Route::get('patientdetails/{id}', [PatientRegistrationController::class, 'getPatientDetails']);
Route::put('updatepatient/{id}', [PatientRegistrationController::class, 'updatepatient']);


Route::post('/login', [PatientRegistrationController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/header-banners', [ImageController::class, 'allbanner']);

Route::get('/customer-reviews', [CustomerReviewController::class, 'index']);

Route::get('/zwaara-services', [ZwaaraServiceController::class, 'index']);

Route::get('/service-addresses/{id}', [ServiceAddressController::class, 'show']);

Route::get('/faqs', [FAQController::class, 'index']);
Route::post('/subscribe', [SubscriptionController::class, 'store']);
Route::get('/subscribers', [SubscriptionController::class, 'index']);
Route::get('/consulting-list', [ConsultingListController::class, 'index']);
Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/laborotaryservices', [LaborotaryServicesController::class, 'index']);

Route::get('/ourservices', [OurServicesController::class, 'ourservicesapi']);
Route::get('/subservices', [SubServicesController::class, 'subservicesapi']);
Route::get('/subservicespackage', [SubServicesController::class, 'subservicespackageapi']);
Route::get('/subservicesinside', [SubServicesController::class, 'subservicesinsideapi']);
Route::get('/packagename', [SubServicesController::class, 'packagenameapi']);
Route::get('/subservicepackage', [SubServicesController::class, 'subservicespacakgeinsideserviceapi']);
Route::get('/subservicepackagename', [SubServicesController::class, 'subservicepackagenameapi']);
Route::get('/Healthcarebanking', [HealthcareSettingsController::class, 'fetchAccountData']);
Route::post('/createappointment', [BookingsController::class, 'store']);
Route::get('/getappointmentbypatient/{id}', [BookingsController::class, 'getPatientAppointments']);
Route::post('/getsessions', [HealthcareSettingsController::class, 'getSessions']);
Route::get('/fetchZoneData/{latitude}/{longitude}', [ZoneController::class, 'fetchZoneData']);
Route::get('/getHealthcare/{id}', [ServiceProviderController::class, 'getHealthcare']);
Route::post('/storepayment', [PaymentsController::class, 'store']);
Route::get('/terms-conditions', [TermConditionController::class, 'GetTermcondition']);
Route::get('/all-terms-conditions', [TermConditionController::class, 'GetAllTermcondition']);
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'GetPrivacypolicy']);
Route::get('/all-privacy-policy', [PrivacyPolicyController::class, 'GetAllPrivacypolicy']);

Route::post('/createaddress', [PatientAddressController::class, 'store']); // Add address
Route::put('updateaddress/{id}', [PatientAddressController::class, 'update']); // Update address
Route::delete('deleteaddress/{id}', [PatientAddressController::class, 'destroy']);
Route::get('getaddress/{userid}', [PatientAddressController::class, 'GetAddressByUserid']);