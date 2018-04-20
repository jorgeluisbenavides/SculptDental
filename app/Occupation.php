<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Customer;

class Occupation extends Model
{
	//salvar datos de maner masiva - formulario en forma de array
	protected $fillable = [
		'title'
	];
	
    //una ocupacion puede tener N Clientes
    public function customer(){
    	return $this->hasMany(Customer::class); //una ocupacion tiene N clientes
    }

}
