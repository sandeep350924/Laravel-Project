<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientlistController;
use App\Http\Controllers\PrescriptionController;



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
Route::get('/','App\Http\Controllers\FrontendController@index');

Route::get('/home','App\Http\Controllers\HomeController@index');

Route::get('/new-appointment/{doctorId}/{date}','App\Http\Controllers\FrontendController@show')->name('create.appointment')->middleware('auth');


Route::group(['middleware'=>['auth','patient']],function(){
    Route::post('/book/appointment','App\Http\Controllers\FrontendController@store')->name('booking.appointment');

    Route::get('/my-booking','App\Http\Controllers\FrontendController@mybookings')->name('my.booking');

    Route::get('/user-profile','App\Http\Controllers\ProfileController@index');
    Route::post('/profile','App\Http\Controllers\ProfileController@store')->name('profile.store');

    Route::post('/profile-pc','App\Http\Controllers\ProfileController@profilePic')->name('profile.pic');
});



Route::get('/dashboard','App\Http\Controllers\DashboardController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','admin']],function(){
    Route::resource('doctor', DoctorController::class);
    Route::get('/patients','App\Http\Controllers\PatientlistController@index')->name('patient');
    Route::get('/patients/all','App\Http\Controllers\PatientlistController@allTimeAppointment')->name('all.appointments');
    Route::get('/status/update/{id}','App\Http\Controllers\PatientlistController@toggleStatus')->name('update.status');
});

Route::group(['middleware'=>['auth','doctor']],function(){

    Route::resource('appointment', AppointmentController::class);
    Route::post('/appointment/check','App\Http\Controllers\AppointmentController@check')->name('appointment.check');

    Route::post('/appointment/update','App\Http\Controllers\AppointmentController@updateTime')->name('update');
    Route::get('patient-today','App\Http\Controllers\AppointmentController@index');

});
