<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addpatient;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Contactedpatient;

class ContactedpatientController extends Controller
{
    public function contacted_patients($id){
        $addpatient =   Addpatient::find($id);
        $addpatient->IsActive = true;

        $addpatient->save();
        $addpatients =   Addpatient::find($id);

        Contactedpatient::create([

             'fullname' => $addpatients->fullname,
             'symptoms' => $addpatients->symptoms,
             'Length'  => $addpatients->Length,
             'weight' => $addpatients->weight,
             'patient_id' =>  $addpatients->id,
             'age'  =>$addpatients->age,
             'uploaded' =>$addpatients->uploaded,
             'phone_number' =>$addpatients->phone_number,
             'IsActive' =>false,
             // Login Session
             'doctor_id' => Session()->get('id')
       ]);

       $ills =   Addpatient::get()
       ->where('IsActive',false);

       return view('doctors.addpatient',compact('ills'));

     }

     // Delete Contacted patients
     public function delete_contactedpatients($id){
        $deleteaddpatient = Contactedpatient::find($id);
        $deleteaddpatient->delete();
        // Delete uploaded on server
        //unlink("uploaded/images/$deleteaddpatient->uploaded");
        return redirect()->back()->with('deleted','تم حذف المريض بنجاح');


    }

    // Admin Contacted patient
  public function admin_contactedpatients(){
    $contactedpatients =    Contactedpatient::get();
    return view('admin.contactedpatients',compact('contactedpatients'));
  }


  // Delete Admin Contacted Patient
  public function delete_admincontactedpatients($id){
    $deleteaddpatient = Contactedpatient::find($id);
    $deleteaddpatient->delete();
    return redirect()->back()->with('deleted','تم حذف المريض بنجاح');
  }
}



