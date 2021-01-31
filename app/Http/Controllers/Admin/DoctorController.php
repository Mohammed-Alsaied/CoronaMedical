<?php

namespace App\Http\Controllers\Admin;
use App\Notifications\DoctorCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use App\Models\Addpatient;


class DoctorController extends Controller
{
    public function doctor (){
        $doctors = Doctor::get();
        return view('admin.doctor',compact('doctors'));


    }

        // Doctors And Added Patients Realasion
    public function addpatient($id){
        $doctor =  Doctor::find($id);

        $ills =  $doctor->addpatients->where('IsActive',false);
        return view('doctors.addpatient',compact('ills'));

      }
        // Doctors And Contacted Patients Realasion

      public function contacted_patient($id){
        $doctor =  Doctor::find($id);
        $ills =  $doctor->contactedpatients->where('IsActive',false);

        return view('doctors.contactedpatients',compact('ills'));

      }
        // Doctors And Healed Realasion

      public function healed_patient($id){
        $doctor =  Doctor::find($id);
        $ills =  $doctor->healedpatients->where('IsActive',false);
        return view('doctors.healedpatients',compact('ills'));

      }


    /*public function dashsidebar (){
            $docusers = Doctor::get();

            return view('doctors.layout.dashboard',compact('docusers'));
        }*/

    /*public function doctorusers (){
           // $doctorsusers = Doctor::find();
            $doctorsusers = Doctor::get();
            return view('doctors.layout.dashboard',compact('doctorsusers'));
        }*/

     /* Create New Doctor */

     /* Inputs Validation */

    public function store_doctor(Request $request){
        $validator = Validator::make($request->all(),
        [
                'fullname' => 'required|string',
                'specialization' => 'required',
                'hospital' => 'required',
                'username' => 'required|unique:doctors,username',
                'email' => 'required|unique:doctors,email',
                'password' => 'required|min:8|max:16',
                'confirmpassword' => 'required|same:password|min:8|max:16',
                'donatedhour' =>'required|numeric',
                'expyears' => 'required|numeric',
                'gender' =>'required'
        ],
        [
                'fullname.required' => 'هذا الحقل مطلوب',
                'fullname.string' => ' حروف وارقام فقط ',
                'specialization.required' => 'هذا الحقل مطلوب',
                'hospital.required' => 'هذا الحقل مطلوب',
                'username.required' => 'هذا الحقل مطلوب',
                'username.unique' => ' إسم المستخدم تم اخذه من قبل ',
                'username.string' => ' حروف وارقام فقط ',
                'email.required' => 'هذا الحقل مطلوب',
                'email.unique' => 'البريد الإلكتروني مسجل من قبل',
                'password.required' => 'هذا الحقل مطلوب',
                'password.min' => 'كلمة المرور يجب ان لا تقل عن 8 احرف',
                'password.max' => 'كلمة المرور يجب ان لا تزيد عن 16 حرف',
                'confirmpassword.required' => ' هذا الحقل مطلوب ',
                'confirmpassword.same' => ' كلمتا السر غير متطابقة ',
                'donatedhour.required' => 'هذا الحقل مطلوب',
                'donatedhour.numeric' => ' هذا الحقل ارقام فقط',
                'expyears.required' => 'هذا الحقل مطلوب',
                'expyears.numeric' => ' هذا الحقل ارقام فقط',
                'gender.required' => 'هذا الحقل مطلوب',



        ]
    );


    if($validator ->fails()){
        return redirect()->back()->
               withErrors($validator)->withInputs($request->flash());
    }
     /* Insert New Doctor */

      $doctor =  Doctor::create([
                'fullname' => $request->fullname,
                'specialization' => $request->specialization,
                'hospita_name' => $request->hospital,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'phone_number' => $request->phonenumber,
                'number_of_donated_hour' => $request->donatedhour,
                'years_of_Experience' => $request->expyears,
                'gender' => $request->gender
          ]);
                //Notification::send($doctor,new DoctorCreated($doctor));
          return redirect()->back()->with('success','تم التسجيل  بنجاح');
    }

     // Edit Doctor
     public function editdoctor($id) {
        $editdoctors = Doctor::find($id);
        $arr = array('editdoctor'=>$editdoctors);
        return view('doctors.user',$arr);

        }
     // Update Doctor Data
     public function edit_user($id, Request $request){
        $doctor =  Doctor::find($id);
        $doctor->username = $request->username;
        $doctor->number_of_donated_hour = $request->donatehours;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->save();
        return redirect()->back()->with('success','تم تحديث البيانات بنجاح.');
    }

    // Delete Doctor
    public function delete_doctors($id){
            $deldoctor = Doctor::find($id);
            $deldoctor->delete();
            //$deldoctor->addpatients()->delete();
            /*$deldoctor->patient()->delete();*/
            return redirect()->back()->with('deleted','تم حذف الطبيب  بنجاح');
    }


     // Login Doctor
        public function login (Request $request){
            $email = $request->email;
            $pass = $request->pass;

        $login =  Doctor::select('email','password','username','id','phone_number','number_of_donated_hour','hospita_name')
                        ->where('email',$email)
                        ->where('password',$pass)
                        ->orWhere('username',$email)
                        ->where('password',$pass)->get();

                        if($login ->count() == 1){
                            foreach($login as $log){
                                $request->Session()->put('username',$log->username);
                                $request->Session()->put('id',$log->id);
                                $request->Session()->put('email',$log->email );
                                $request->Session()->put('password',$log->password );
                                $request->Session()->put('phone_number',$log->phone_number );
                                $request->Session()->put('number_of_donated_hour',$log->number_of_donated_hour );
                                $request->Session()->put('hospita_name',$log->hospita_name );

                                /*if (Session()->has('id')){
                                    Addpatient::create([
                                        'doctor_id' => Session()->get('id')

                                    ]);
                                }*/
                                return redirect()->route('ddashboard');
                            }
                        }else{
                            return redirect()->back()->with('failed','فشل تسجيل الدخول خطأ في ادخال البيانات ');
                        }
        }

        // Doctor Log Out
        public function logout(Request $request){
             $request->Session()->flush();
             return redirect()->route('index');
        }
}
