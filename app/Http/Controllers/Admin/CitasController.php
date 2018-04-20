<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//add
use App\Doctor;
use App\Quote;
use App\Customer;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::orderBy('full_name','ASC')->pluck('full_name','id');

        //dd( $doctors );

        return view('citas.index', compact('doctors') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd( $request->all() );
        $fecha  = $request->input('fecha_cita');
        $doctor = $request->input('doctor');
        $customer = $request->input('customer_id');

        $quotes = Quote::orderBy('hour','ASC')->where( [ ['date','=',$fecha],['doctor_id','=',$doctor] ] )->get();

        //dd(  );

        if ( count( $quotes ) == 0 ) {
            $quotes=[
                ['hour'=>'09:00-09:59', 'date'=>$fecha, 'doctor_id' => $doctor],
                ['hour'=>'10:00-10:59', 'date'=>$fecha, 'doctor_id' => $doctor],
                ['hour'=>'11:00-11:59', 'date'=>$fecha, 'doctor_id' => $doctor],
                ['hour'=>'12:00-12:59', 'date'=>$fecha, 'doctor_id' => $doctor],
                ['hour'=>'13:00-13:59', 'date'=>$fecha, 'doctor_id' => $doctor],
                ['hour'=>'15:00-15:59', 'date'=>$fecha, 'doctor_id' => $doctor],
                ['hour'=>'16:00-16:59', 'date'=>$fecha, 'doctor_id' => $doctor],
            ];

            foreach ($quotes as $quote) {
                Quote::create( $quote );
            }

            $quotes = Quote::orderBy('hour','ASC')->where( [ ['date','=',$fecha],['doctor_id','=',$doctor] ] )->get();
        }

        $id = $fecha.'.'.$doctor.'.'.$customer;

        //return view('citas.create', compact('quotes') );
        return redirect()->route('citas.show', $id);

        //dd( $request->all() );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $conditions = explode('.', $id);

        $fecha  = $conditions[0];
        $doctor = $conditions[1];
        $customer_id = $conditions[2];



        $quotes = Quote::orderBy('hour','ASC')->where( [ ['date','=',$fecha],['doctor_id','=',$doctor] ] )->get();
        $customer = Customer::find( $customer_id );

        return view('citas.show', compact('quotes','customer') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
