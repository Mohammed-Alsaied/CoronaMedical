<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Healedpatient extends Model
{
    protected $table = 'healedpatients';
    protected $fillable = ['fullname','IsActive','doctor_id','patient_id','email','age','Length',
                           'weight','phone_number','symptoms','uploaded','created_at','updated_at'];


    public function  doctors(){
    return $this->belongsTo('App\Models\Doctor','doctor_id','id');
    }
}
