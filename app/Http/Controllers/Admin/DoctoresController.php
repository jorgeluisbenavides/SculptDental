<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Doctor;
use File;
class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $doctors = Doctor::all();
        //dd($doctors);
        return view('admin.doctores.index_doc', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = $request->all();

        $doctor['name']          = ucfirst( $doctor['name'] );
        $doctor['last_name_one'] = ucfirst( $doctor['last_name_one'] );
        $doctor['last_name_two'] = ucfirst( $doctor['last_name_two'] );
        $doctor['speciality']       = ucfirst( $doctor['speciality'] );
        $doctor['full_name'] = $doctor['last_name_one']." ".$doctor['last_name_two']." ".$doctor['name'];
        $doctor = Doctor::create( $doctor );

        //no se cargo foto, se agrega un avatar
        if ( $request->file('img_name') ) {
            $path_img = Storage::disk('public_folder')->put('doctors',  $request->file('img_name'));
            $doctor->fill(['img_name' => $path_img ] )->save();
        }else{
            //se coloca el avatar si no se agrego archivo, depende del sexo
            ( $doctor['sex'] == 'Masculino' ) ? $img = 'doctors/avatar_male.png' : $img = 'doctors/avatar_female.png';
            $doctor->fill(['img_name' => $img ] )->save();
        }

        return view('admin.doctores.profile', compact('doctor') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);

        return view('admin.doctores.profile', compact('doctor') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor    = Doctor::find($id);

        return view('admin.doctores.edit', compact('doctor') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->fill( $request->all() )->save();

        return redirect()->route('doctores.show', $doctor->id )->with('info','Se han actualizado datos correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        $doctor->fill( $request->all() )->save();

        return redirect()->route('admin.doctores.show', $doctor->id )->with('info','Se han actualizado datos correctamente.');
    }
}
