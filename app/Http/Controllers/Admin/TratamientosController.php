<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTreatmentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Treatment;

class TratamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numTreatments=0;
        $treatments = Treatment::orderBy('name', 'ASC')->get();
        if(isset($treatments)){
            $numTreatments=count($treatments);
        }
        
        return view('admin.tratamientos_list.index', compact('treatments','numTreatments') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tratamientos.index_treat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTreatmentRequest $request)
    {
        $treatment=$request->all();
        $treatment['name'] = ucfirst($treatment['name']);
        $treatment['amount'] = ucfirst($treatment['amount']);
        $treatment['description'] = ucfirst($treatment['description']);
        $treatment = Treatment::create($treatment);
        return redirect()->route('treat_index')->with('info', $treatment->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatment = Treatment::find($id);

        return view('admin.tratamientos.assignment_treatment_patient', compact('treatment'));
    }

    public function assignmentTreatmentPatient(Request $request){
       $msg="";
       $fech=date('Y-m-d h:i:s');
       $id = DB::table('treatments_customers')->insertGetId( 
        ['treatments_id' => $request->idTreatment, 
        'customers_id' => $request->idCustomer,
         'users_id' => $request->idUser,
         'created_at' => $fech,
         'updated_at' => $fech ]
        );
       if(isset($id)){
            $msg="Asignación Exitosa..";
       }
        return response()->json($msg);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatment = Treatment::find($id);

        return view('admin.tratamientos.edit', compact('treatment') );
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
        $treatment = Treatment::find($id);

        $treatment->fill( $request->all() )->save();

        return redirect()->route('tratamientos.edit', $treatment->id )->with('info','Se han actualizado los datos correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
