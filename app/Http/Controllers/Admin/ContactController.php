<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // Get Contact
    public function contact (){
        $contacts =  Contact::get();
         return view('admin.contact',compact('contacts'));
     }



    // Create Contact
    public function store_contact (Request $request){
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ],
            [
                'name.required' => 'هذا الحقل مطلوب',
                'email.required' => 'هذا الحقل مطلوب',
                'subject.required' => 'هذا الحقل مطلوب',
                'message.required' => 'هذا الحقل مطلوب'
           ]
        );

        if($validator ->fails()){
            return redirect()->back()->
            withErrors($validator)->withInputs($request->flash());
        }
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->back()->with('success','تم إرسال رسالتك  بنجاح.');
    }

    // Delete Contact

    public function delete_contact($id){
        $deldoctor = Contact::find($id);
        $deldoctor->delete();
        /*$deldoctor->patient()->delete();*/
        return redirect()->back()->with('deleted','تم حذف الرساله  بنجاح.');
    }

}
