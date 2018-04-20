<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//add
use App\Customer;
use App\Doctor;
use App\Quote;

class CitaController extends Controller
{
    public function index(){
    	return view('citas.index');
    }

    public function createQuote($id){

    	$customer = Customer::find($id);
    	$doctors = Doctor::orderBy('full_name','ASC')->pluck('full_name','id');

    	return view('citas.create', compact('customer','doctors'));
    }

    /*
        Peticiones ajax
    */

    public function searchCustomer(Request $request){
        if( $request->ajax() ){
            $customers = Customer::where(
                            [
                                ['full_name','like','%'.$request->fullname.'%'],
                                ['folio','like','%'.$request->folio.'%']
                            ]
                            )->take(10)->get();
            return response()->json( $customers );
        }
    }    

    public function searchQuote(Request $request){

        if( $request->ajax() ){

            $quotes = Quote::where( [ ['date','=', $request->date], ['doctor_id','=', $request->doctor] ] )->get();

            $res_json = [];

            foreach ($quotes as $quote) {
                $json_quote['date'] = $quote->date;
                $json_quote['hour'] = $quote->hour;
                $json_quote['contract'] = $quote->contract;
                $json_quote['observation'] = $quote->observation;
                $json_quote['account'] = $quote->account;
                $json_quote['treatment'] = $quote->treatment;
                $json_quote['status'] = $quote->status;
                if ($quote->customer) {
                    $json_quote['customer'] = $quote->customer->full_name;
                    $json_quote['customer_id'] = $quote->customer->id;
                }else{
                    $json_quote['customer'] = '';
                    $json_quote['customer_id'] = '';
                }

                if ($quote->doctor) {
                    $json_quote['doctor'] = $quote->doctor->full_name;
                    $json_quote['doctor_id'] = $quote->doctor->id;
                }else{
                    $json_quote['doctor'] = '';
                    $json_quote['doctor_id'] = '';
                }

                $res_json[] = $json_quote; 
            }

        }

        return response()->json( $res_json );
    }

    public function addQuote(Request $request){

        if( $request->ajax() ){
            $info_arr = explode("-", $request->info);

            $quote['hour'] = $info_arr[0].'-'.$info_arr[1];
            $quote['date'] = $info_arr[2].'-'.$info_arr[3].'-'.$info_arr[4];
            $quote['customer_id'] = $request->customer_id;
            $quote['doctor_id'] = $request->doctor;
            $quote['observation'] = $request->observation;
            $quote['treatment'] = $request->treatment;
            $quote['status'] = 'En espera';

            Quote::create( $quote );
        }

        return response()->json( ['msg'=>$request->all()] );
    }

    public function editQuote(Request $request){
        if ($request->ajax()) {
            $info_arr = explode(".", $request->info);
            $data_arr = explode("-", $info_arr[1]);
            $hour = $data_arr[0].'-'.$data_arr[1];
            $date = $data_arr[2].'-'.$data_arr[3].'-'.$data_arr[4];
            $quote = Quote::where([ ['hour','=',$hour],['date','=',$date] ])->first();

            return response()->json( $quote  );
        }        
    }

    public function updateQuote(Request $request){
        if ($request->ajax()) {

            $info_arr = explode(".", $request->id);
            $data_arr = explode("-", $info_arr[1]);
            $hour = $data_arr[0].'-'.$data_arr[1];
            $date = $data_arr[2].'-'.$data_arr[3].'-'.$data_arr[4];

            $up_quote['observation'] = $request->observation;
            $up_quote['treatment'] = $request->treatment;
            $up_quote['status'] = $request->status;

            $quote = Quote::where([ ['hour','=',$hour],['date','=',$date] ])->first();

            $find_quote = Quote::find( $quote->id );

            $find_quote->fill( $up_quote )->save();

            return response()->json( $find_quote  );
        }        
    }    

    public function deleteQuote(Request $request){
        if ($request->ajax()) {
            $info_arr = explode(".", $request->info);
            $data_arr = explode("-", $info_arr[1]);
            $hour = $data_arr[0].'-'.$data_arr[1];
            $date = $data_arr[2].'-'.$data_arr[3].'-'.$data_arr[4];
            Quote::where([ ['hour','=',$hour],['date','=',$date] ])->delete();
        }
    }
}
