<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['hour','date','account','treatment','contract','observation','status','doctor_id','customer_id'];

    public function doctor(){
    	return $this->belongsTo(Doctor::class);
    }

    public function customer(){
    	return $this->belongsTo(Customer::class);
    }
}
