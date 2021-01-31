<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    /*================================= Begin Admin Routes ====================================== */
        // Admins Login

    Route::get('/','AdminController@alogin')->name('aalogin');

    Route::post('/login','AdminController@login')->name('admin.login');

    Route::get('/logout','AdminController@logout')->name('admin.logout');

    Route::get('/signup','AdminController@signup')->name('aasignup');

    Route::post('/store-contact','ContactController@store_contact')->name('store.contact');

    Route::post('/admin_store','AdminController@admins_store')->name('admin.store');

    Route::post('/store_doctors','DoctorController@store_doctor')->name('store.doctros');

    Route::post('/store_patients','PatientController@store_patients')->name('store.patient');


});

Route::group(['prefix' => 'Admin', 'namespace' => 'Admin','middleware'=>'prevent'], function () {


    Route::get('/dashboard','AdminController@adashboard')->name('aadashboard');

    Route::get('/edit-admin/{id}','AdminController@editadmin')->name('edit.admin');

    Route::post('/update-admin/{id}','AdminController@update_admin')->name('update.admin');

    /*================================= Begin Admin users Routes ====================================== */

    Route::get('/admin-users','AdminController@admin_users')->name('admin.users');

    Route::get('/edit-adminusers/{id}','AdminController@editadminusers')->name('edit.adminusers');

    Route::post('/update-adminusers/{id}','AdminController@update_adminusers')->name('update.adminusers');

    /*================================= End  Admin Users Routes ====================================== */

    //Route::get('/users','AdminController@ausers')->name('aausers');

    /*================================= Begin Doctor Routes ====================================== */

    Route::get('/delete-users/{id}','AdminController@delete_users')->name('delete.users');

    Route::get('/doctors','DoctorController@doctor')->name('adoctor');

    Route::get('/delete-doctors/{id}','DoctorController@delete_doctors')->name('delete.doctors');

    /*================================= End Doctor Routes ====================================== */

    Route::get('/contact','ContactController@contact')->name('contact');

    Route::get('/delete-contact/{id}','ContactController@delete_contact')->name('delete.contact');

        /*================================= Begin  PAtients Routes ====================================== */

    Route::get('/patient','PatientController@patient')->name('apatient');

    Route::get('/delete-patients/{id}','PatientController@delete_patients')->name('delete.patient');

    /*================================= End  PAtients Routes ====================================== */

    /*================================= Begin Add PAtients Routes ====================================== */

    Route::get('/addedpatients','AddpatientController@admin_addpatients')->name('admin.addpatients');

    Route::get('/delete-addpatients/{id}','AddpatientController@delete_adminaddpatients')->name('delete.adminaddpatient');

    /*================================= End Add PAtients Routes ====================================== */

    /*================================= Begin Contacted PAtients Routes ====================================== */

    Route::get('/Contactedpatients','ContactedpatientController@admin_contactedpatients')->name('admin.contactedpatients');

    Route::get('/delete-Contactedpatients/{id}','ContactedpatientController@delete_admincontactedpatients')->name('delete.contactedpatients');

    /*================================= End Contacted PAtients Routes ====================================== */

    /*================================= Begin Healed PAtients Routes ====================================== */

    Route::get('/healedpatients','HealedpatientController@admin_healedpatients')->name('admin.healedpatients');

    Route::get('/delete-healedpatients/{id}','HealedpatientController@delete_adminhealedpatients')->name('delete.healedpatients');


    /*================================= End Healed PAtients Routes ====================================== */


});


