<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addpatient;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Contactedpatient;
use App\Models\Healedpatient;

class HealedpatientController extends Controller
{
    public function healed_patients($id){
        $contactedpatients =   Contactedpatient::find($id);
        $contactedpatients->IsActive = true;

        $contactedpatients->save();
        $contactedpatient =   Contactedpatient::find($id);

        Healedpatient::create([

             'fullname' => $contactedpatient->fullname,
             'symptoms' => $contactedpatient->symptoms,
             'Length'  => $contactedpatient->Length,
             'weight' => $contactedpatient-> weight,
             'patient_id' =>  $contactedpatient-> id,
             'age'  =>$contactedpatient->age,
             'uploaded' =>$contactedpatient->uploaded,
             'phone_number' =>$contactedpatient->phone_number,
             'IsActive' =>false,
             // Login Session
             'doctor_id' => Session()->get('id')
       ]);

          $ills =   Contactedpatient::get()
          ->where('IsActive',false);
       return view('doctors.contactedpatients',compact('ills'));

     }

     // delete Healed Patients
     public function delete_healedpatients($id){
        $deleteaddpatient = Healedpatient::find($id);
        $deleteaddpatient->delete();
        // Delete uploaded on server
        //unlink("uploaded/images/$deleteaddpatient->uploaded");
        return redirect()->back()->with('deleted','تم الحذف  بنجاح');


    }

    // Admim Healed Patient

    public function admin_healedpatients(){
        $healedpatients = Healedpatient::get();
        return view('admin.healedpatient',compact('healedpatients'));
      }

     // Admin Delete Healed patient
     public function delete_adminhealedpatients($id){
        $deleteaddpatient = Healedpatient::find($id);
        $deleteaddpatient->delete();
        return redirect()->back()->with('deleted','تم حذف المريض بنجاح');
      }
}
