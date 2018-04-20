<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Treatment;

class Treatment extends Model
{
	//salvar datos de maner masiva - formulario en forma de array
    protected $fillable =['id','name','amount','description','status'];


}
