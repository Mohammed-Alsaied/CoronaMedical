<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index (){
        return view('frontend.index');
    }


    public function signup (){
        return view('frontend.sign_up');
    }

    public function signin (){
        return view('frontend.sign_in');
    }

    public function ddashboard (){
        return view('doctors.dashboard');
    }

    /*public function duser (){
        return view('doctors.user');
    }*/

    /*public function dtable (){
        return view('doctors.patients');
    }*/

    public function dtable2 (){
        return view('doctors.addedpatients');
    }

}

