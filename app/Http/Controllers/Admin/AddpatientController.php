<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addpatient;
use App\Models\Patient;
use App\Models\Doctor;


use Illuminate\Support\Facades\Validator;


class AddpatientController extends Controller

{


    // Create Add Patient

      public function addpatients($id){
      $patient =   Patient::find($id);
      $patient->IsActive = true;

     // $add = array('addpatient' =>$patient );
     $patient->save();
     $patients =   Patient::find($id);
        Addpatient::create([
           /* if (Session()->has('id')){
                Addpatient::create([
                    'doctor_id' => Session()->get('id')

                ]);
            }*///'id'
            'fullname' => $patients->fullname,
            'symptoms' => $patients->symptoms,
            'Length'  => $patients->Length,
            'weight' => $patients-> weight,
            'patient_id' =>  $patients-> id,
            'age'  =>$patients->age,
            'uploaded' =>$patients->uploaded,
            'phone_number' =>$patients->phone_number,
            'IsActive' =>false,
            // Login Session
            'doctor_id' => Session()->get('id')
      ]);
      $ills =   Patient::get()
      ->where('IsActive',false);

      return view('doctors.patients',compact('ills'));

    }
    /*public function addpatients($id){
        $ills = Patient::find($id);
        $arr = array('ill' => $ills);
        return view('doctors.addedpatients',$arr);
    }*/

    // Delete Patient
    public function delete_addpatients($id){
        $deleteaddpatient = Addpatient::find($id);
        $deleteaddpatient->delete();
        // Delete uploaded on server
        //unlink("uploaded/images/$deleteaddpatient->uploaded");
        return redirect()->back()->with('deleted','تم حذف المريض بنجاح');


    }

    public function admin_addpatients(){
     $addminaddpatients =    Addpatient::get();
     return view('admin.addpatient',compact('addminaddpatients'));


    }

    // Delete Admin Add Patoent
    public function delete_adminaddpatients($id){
        $deleteaddpatient = Addpatient::find($id);
        $deleteaddpatient->delete();
        return redirect()->back()->with('deleted','تم حذف المريض بنجاح');


    }

}
