<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;
//use Illuminate\Notifications\Notifiable;

class Doctor extends Model

{
    //use Notifiable;

    protected $table = 'doctors';
    protected $fillable = ['fullname','specialization','gender','hospita_name','username','email','password','phone_number',
                           'number_of_donated_hour','years_of_Experience','created_at','updated_at'];
    /*protected $hidden = ['created_at','updated_at'];*/

    // Doctor & Add Patient Relasionship
    public function addpatients(){
        return $this->hasMany('App\Models\Addpatient');
    }

    public function contactedpatients(){
        return $this->hasMany('App\Models\Contactedpatient');
    }

    public function healedpatients(){
        return $this->hasMany('App\Models\Healedpatient');
    }
}
