<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = ['fullname','email','age','Length','gender',
                           'weight','phone_number','symptoms','IsActive','uploaded','created_at','updated_at'];
    //protected $hidden = ['created_at','updated_at'];
    // Doctor & Patient Relasionship
    //public function doctor(){
       // return $this->belongsTo('App\Models\Doctor','doctor_id','id');

    //}
}
