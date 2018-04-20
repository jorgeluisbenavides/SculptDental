<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =['id','name','last_name_one','last_name_two','full_name','speciality','professional_license','graduate_university','sex','cell_phone','home_phone','img_name'];

    public function quotes(){
    	return $this->hasMany(Quote::class);
    }
}
