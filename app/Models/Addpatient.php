<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addpatient extends Model
{
    protected $table = 'addpatients';
    protected $fillable = ['fullname','IsActive','doctor_id','patient_id','email','age','Length',
                           'weight','phone_number','symptoms','uploaded','created_at','updated_at'];
    /*protected $hidden = ['created_at','updated_at'];*/

    // Doctor & Add Patient Relasionship
    public function  doctors(){
        return $this->belongsTo('App\Models\Doctor','doctor_id','id');
    }



}
