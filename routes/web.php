<?php

use App\Http\Controllers\FrontEnd\SiteController;
use Illuminate\Support\Facades\Route;

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



    /*================================= Begin Site Routes ====================================== */

Route::group(['prefix' => 'medical'], function () {

    Route::get('/','FrontEnd\SiteController@index')->name('home');

    Route::get('/signup','FrontEnd\SiteController@signup')->name('sign-up');

    Route::get('/signin','FrontEnd\SiteController@signin')->name('sign-in');

    Route::post('/login','Admin\DoctorController@login')->name('doctor.login');

    /*================================= End Site Routes ====================================== */

});
    /*================================= End Admin Routes ====================================== */

    /*================================= Begin Doctor Routes ====================================== */

Route::group(['prefix' => 'Doctor', 'middleware' =>'doctorprevent'], function () {

    Route::get('/login','FrontEnd\SiteController@signin')->name('index');

    Route::get('/dashboard','FrontEnd\SiteController@ddashboard')->name('ddashboard');

    //Route::get('/dashsidebar','Admin\DoctorController@dashsidebar')->name('dashsidebar');


    Route::get('/logout','Admin\DoctorController@logout')->name('doctor.logout');

    /*Route::get('/dash/{doctor_id}','Admin\DoctorController@doctorusers')->name('doctor.dash');*/

    Route::get('/edit-doctor/{id}','Admin\DoctorController@editdoctor')->name('edit.doctor');

    Route::post('/update-doctor/{id}','Admin\DoctorController@edit_user')->name('update.doctor');

    /*================================= End Doctor Routes ====================================== */


    /*Route::get('/user','FrontEnd\SiteController@duser')->name('dduser');*/

    /*================================= Begin Patient Routes ====================================== */

    Route::get('/patients','Admin\PatientController@patients')->name('pateints');

    Route::get('/search-patients','Admin\PatientController@search_patients')->name('search.patients');

    /*=================================== End patient Routes ====================================== */

    /*=================================== Begin Add Patient Routes ====================================== */

    Route::get('/addedpatients/{id}','Admin\AddpatientController@addpatients')->name('add.patients'); // add button

    Route::get('/addedpatient/{id}','Admin\DoctorController@addpatient')->name('add.patient');  // View Realtions

    Route::get('/delete-patients/{id}','Admin\AddpatientController@delete_addpatients')->name('delete.patients');

    /*==================================== End Add Patient Routes ====================================== */

    /*==================================== Begin Contacted Patient Routes ====================================== */

    Route::get('/contacedpatients/{id}','Admin\ContactedpatientController@contacted_patients')->name('contacted.patients'); // contact button

    Route::get('/contacedpatient/{id}','Admin\DoctorController@contacted_patient')->name('contacted.patient');  // View Realtions

    Route::get('/delete-contactedpatients/{id}','Admin\ContactedpatientController@delete_contactedpatients')->name('delete.contactedpatients');

    /*===================================== End Contacted Patient Routes ====================================== */

    /*===================================== Begin Healed Patient Routes ====================================== */

    Route::get('/healedpatients/{id}','Admin\HealedpatientController@healed_patients')->name('healed.patients'); // contact button

    Route::get('/healedpatient/{id}','Admin\DoctorController@healed_patient')->name('healed.patient');  // View Realtions

    Route::get('/delete-healedpatients/{id}','Admin\HealedpatientController@delete_healedpatients')->name('delete.healeddpatients');

    /*===================================== End Healed Patient Routes ====================================== */


});










/*Route::get('/show', function () {
    return view('show');

});

Route::get('/master', function () {
    return view('layout.master');

});




Route::get('/admin',function () {
    return view('admin.index');

})->name('admin.login');

Route::get('/user','FrontEnd\SiteController@index')->name('user.home');

Route::get('/d_login', function () {
    return view('doctors.login');

});

Route::get('/d_signup', function () {
    return view('doctors.signup');

});

Route::get('/d_dashboard', function () {
    return view('doctors.dashboard');

});

Route::get('/p_signup', function () {
    return view('patients.signup');

});

Route::get('/p_login', function () {
    return view('patients.login');

});*/
