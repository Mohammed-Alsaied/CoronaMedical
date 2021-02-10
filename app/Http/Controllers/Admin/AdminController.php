<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller

{
    public function signup (){
        return view('admin.signup');

    }

    public function alogin (){
        return view('admin.login');
    }

    public function admin_users (){
       $admins =  Admin::get();
        return view('admin.users',compact('admins'));
    }




    public function adashboard (){
        return view('admin.dashboard');
    }
    // Edit Admin
    public function editadmin ($id){
        $editadmin = Admin::find($id);
        $arr = array('editadmins'=>$editadmin);
        return view('admin.user',$arr);
    }

    // Update Admin Data
    public function update_admin($id, Request $request){
        $doctor =  Admin::find($id);
        $doctor->username = $request->username;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->save();
        return redirect()->back()->with('success','تم تحديث البيانات بنجاح.');
    }

    // Edit Admin Users
    public function editadminusers ($id){
        $editadmin = Admin::find($id);
        $arr = array('editadmins'=>$editadmin);
        return view('admin.editusers',$arr);
    }
    // Update Admin users

    public function update_adminusers($id, Request $request){
        $doctor =  Admin::find($id);
        $doctor->username = $request->username;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->save();
        return redirect()->back()->with('success','تم تحديث البيانات بنجاح.');
    }
    public function atable2 (){
        return view('admin.addpatient');
    }

    // Admins Sign Up
    public function admins_store(Request $request){
        $validator = Validator::make($request->all(),
        [
                'fristname' => 'required',
                'lastname' => 'required',
                'username' => 'required|unique:admins,username',
                'email' => 'required',
                'password' => 'required|min:8|max:16',
                'confirmpass' => 'required|same:password'
        ],
        [
                'fristname.required' => 'هذا الحقل مطلوب',
                'lastname.required' => 'هذا الحقل مطلوب',
                'username.required' => 'هذا الحقل مطلوب',
                'username.unique' => ' إسم المستخدم تم اخذه من قبل ',
                'email.required' => 'هذا الحقل مطلوب',
                'password.required' => 'هذا الحقل مطلوب',
                'password.min' => 'يجب ان لا تقل كلمة السر عن 8 احرف',
                'password.max' => 'يجب ان لا تزيد كلمة السر عن 16 احرف',
                'confirmpass.required' => 'هذا الحقل مطلوب',
                'confirmpass.same' => 'كلمتا السر غير متطابقتين',


        ]
    );

    if($validator ->fails()){
        return redirect()->back()->
               withErrors($validator)->withInputs($request->flash());
    }
        Admin::create([
                'fristname' => $request->fristname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password

          ]);
          return redirect()->back()->with('success','.تم التسجيل  بنجاح');
    }

     //  Admin Login
     public function login (Request $request){
        $email = $request->email;
        $password = $request->password;

      $login =  Admin::select('email','password','username','id')
                        ->where('email',$email)
                        ->where('password',$password)
                        ->orWhere('username',$email)
                        ->where('password',$password)->get();

                    if($login ->count() == 1){
                        foreach($login as $log){
                            $request->Session()->put('userName',$log->username);
                            $request->Session()->put('id',$log->id);
                            return redirect()->Route('aadashboard');
                        }
                    }else{
                        return redirect()->back()->with('failed','.فشل تسجيل الدخول خطأ في ادخال البيانات');
                    }
    }

     // Admin Log Out
     public function logout(Request $request){
        $request->Session()->flush();
        return redirect()->route('aalogin');
   }

   public function delete_users($id){
    $deldoctor = Admin::find($id);
    $deldoctor->delete();
    /*$deldoctor->patient()->delete();*/
    return redirect()->back()->with('deleted','تم حذف المستخدم  بنجاح.');
}

}




