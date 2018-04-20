<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//add
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	switch( Auth::user()->type ){
    		case '1': return view('admin.escritorio.index');  break;
    		case '2': return view('doctor.escritorio.index'); break;
    		case '3': return view('recep.escritorio.index');  break;
    	}
    	return view('escritorio.inicio');
    }
}
