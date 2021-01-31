<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Validator;


class PatientController extends Controller
{
    // Read Patient Frome DB
    public function patient (){
        $patients = Patient::get();
        return view('admin.patient',compact('patients'));
    }

    public function patients (){
        $ills = Patient::get()
        ->where('IsActive',false);
        return view('doctors.patients',compact('ills'));
    }




     /* Create New Patient */

     /* Inputs Patient Validation */
    public function store_patients(Request $request){
        $validator = Validator::make($request->all(),
        [
                'pafullname' => 'required',
                //'pausername' => 'required|unique:patients,username',
                'paemail' => 'required',
                //'papassword' => 'required',
                'age' => 'required|numeric',
                'length' => 'required|numeric',
                'weight' => 'required|numeric',
                'paphonenumber' => 'required',
                'gender' =>'required',
                'symptoms' => 'required'


        ],
        [
                'pafullname.required' => 'هذا الحقل مطلوب',
                //'pausername.required' => 'هذا الحقل مطلوب',
                //'pausername.unique' => ' إسم المستخدم تم اخذه من قبل ',
                'paemail.required' => 'هذا الحقل مطلوب',
                //'papassword.required' => 'هذا الحقل مطلوب',
                'age.required' => 'هذا الحقل مطلوب',
                'age.numeric' => ' هذا الحقل ارقام فقط',
                'length.required' => 'هذا الحقل مطلوب',
                'length.numeric' => ' هذا الحقل ارقام فقط',
                'weight.required' => 'هذا الحقل مطلوب',
                'weight.numeric' => ' هذا الحقل ارقام فقط',
                'paphonenumber.required' => 'هذا الحقل مطلوب',
                'paphonenumber.numeric' => ' هذا الحقل ارقام فقط',
                'symptoms.required' => 'هذا الحقل مطلوب',
                'gender.required' => 'هذا الحقل مطلوب',
        ]
    );

    if($validator ->fails()){
        return redirect()->back()->
               withErrors($validator)->withInputs($request->flash());
    }

    // Uploade Patiemt Files//

    $ext = $request->uploaded->getClientOriginalExtension();
    $file_name = time() . '.' . $ext ;
    $path = 'uploaded/images';
    $request->uploaded->move($path,$file_name);

     /* Insert New patient */

        Patient::create([
                'fullname' => $request->pafullname,
                'email' => $request->paemail,
                'age' => $request->age,
                'Length' => $request->length,
                'weight' => $request->weight,
                'phone_number' => $request->paphonenumber,
                'symptoms' => $request->symptoms,
                'IsActive' => false,
                'gender' => $request->gender,
                'uploaded' => $file_name
          ]);
          return redirect()->back()->with('pasuccess','تم التسجيل  بنجاح.');
    }
    // Delete Patient
        public function delete_patients($id) {
            $deletepatient = Patient::find($id);
            $deletepatient->delete();
            // Delete uploaded on server
            unlink("uploaded/images/$deletepatient->uploaded");
            return redirect()->back()->with('deleted','تم حذف المريض بنجاح.');
        }


        // Search Patiens

        public function search_patients(Request $request ) {

           $data = '%' . $request->K . '%';
           $patients = Patient::where('name','like',$data )->get();
           if (isset($patients) && $patients->count() > 0){
                foreach($patients as $patient ){
                    echo "<p><a href='#'>$patient->name</a></p>";
                }
           }else{
               echo 'لا يوجد بيانات .';
           }
        }
}
