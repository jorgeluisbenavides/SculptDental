<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//add
use App\Customer;
use App\Doctor;
use App\Quote;

class PasosController extends Controller
{
    public function buscar_paciente(Request $request){

    	$lastname_one = $request->input('last_name_one');
    	$lastname_two = $request->input('last_name_two');
    	$name         = $request->input('name');
    	$folio		  = $request->input('folio');

    	$customers = Customer::where('last_name_one','=',$lastname_one)->get();
    	//dd( $customers );
    	//dd( $request->all() );
    	
    	return view('citas.index', compact('customers') );
    }

    public function buscar_fecha($id){

    	$customer = Customer::find($id);

    	$doctors = Doctor::orderBy('full_name', 'ASC')->pluck('full_name','id');

    	return view('citas.paso2', compact('doctors','customer') );
    }

    public function actualizar_cita(Request $request){

        $ids = explode("-", $request->id_row );

        $data_quote['customer_id'] = $ids[1];
        $data_quote['observation'] = $request->observacion;
        $data_quote['treatment']   = $request->tratamiento;
        $data_quote['status']      = 'Pendiente';

        $quote = Quote::find( $ids[0] );

        $quote->fill( $data_quote )->save();

        return response()->json( $quote );

    }

    public function eliminar_cita(Request $request){

        $data_quote['customer_id'] = null;
        $data_quote['observation'] = null;
        $data_quote['treatment']   = null;
        $data_quote['status']      = 'Disponible';

        $quote = Quote::find( $request->quote_id );

        $quote->fill( $data_quote )->save();

        return response()->json( $quote );
    }

    public function buscar_cita(Request $request){

        $quote = Quote::find( $request->quote_id );  

        return response()->json( $quote );      
    }
}
