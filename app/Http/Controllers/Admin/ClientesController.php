<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//add
use App\Http\Requests\CreateCustomerRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Occupation;
use App\Customer;
use App\Treatment;

use File;

class ClientesController extends Controller
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
    
    public function index(Request  $request)
    {
        $occupations = Occupation::orderBy('title', 'ASC')->pluck('title', 'id');
            
     
            return view('admin.clientes.index_cli',compact('occupations'));
    }

    public function liveSearch(Request $request)
    { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('clientes.livesearch');        
        }
        else
        {
            $customers = Customer::where('name','LIKE',"%{$search}%")
                           ->get();
            return view('admin.clientes.livesearchajax', compact('customers'));
        }
    }

    public function patientSearch(Request $request)
    { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('clientes.livesearch');        
        }
        else
        {
            $customers = Customer::where('name','LIKE',"%{$search}%")
                           ->get();
            return view('admin.tratamientos.search_assignment_patient_ajax', compact('customers'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $occupations = Occupation::orderBy('title', 'ASC')->pluck('title', 'id');

        return view('admin.clientes.index_cli', compact('occupations') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCustomerRequest $request)
    {

        $customer = $request->all();

        $customer['name']          = ucfirst( $customer['name'] );
        $customer['last_name_one'] = ucfirst( $customer['last_name_one'] );
        $customer['last_name_two'] = ucfirst( $customer['last_name_two'] );
        $customer['address']       = ucfirst( $customer['address'] );
        $customer['full_name'] = $customer['last_name_one']." ".$customer['last_name_two']." ".$customer['name'];

        $customer = Customer::create( $customer );

        //no se cargo foto, se agrega un avatar
        if ( $request->file('img_name') ) {
            $path_img = Storage::disk('public_folder')->put('customers',  $request->file('img_name'));
            $customer->fill(['img_name' => $path_img ] )->save();
        }else{
            //se coloca el avatar si no se agrego archivo, depende del sexo
            ( $customer['sex'] == 'Masculino' ) ? $img = 'customers/avatar_male.png' : $img = 'customers/avatar_female.png';
            $customer->fill(['img_name' => $img ] )->save();
        }

        return  redirect()->route('cli_index')->with('info', $customer->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //mostrar perfil paciente
    public function show($id)
    {

        $customer = Customer::find($id);
        $numTreatments=0;
        //$treatments = Treatment::orderBy('name', 'ASC')->get();

        $treatments = DB::table('customers')
            ->join('treatments_customers', 'treatments_customers.customers_id', '=', 'customers.id')
            ->join('treatments', 'treatments_customers.treatments_id', '=', 'treatments.id')
            ->join('users', 'treatments_customers.users_id', '=', 'users.id')
            ->select('treatments.name', 'treatments.amount', 'treatments.description', 'users.name as username')->where('treatments_customers.customers_id', '=', $id)
            ->get();

        if(isset($treatments)){
            $numTreatments=count($treatments);
        }
        
        //return view('tratamientos_list.index', compact('treatments','numTreatments') );
        return view('admin.clientes.profile', compact('customer','treatments','numTreatments') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customer    = Customer::find($id);
        $occupations = Occupation::orderBy('title','ASC')->pluck('title','id');

        return view('admin.clientes.edit', compact('customer','occupations') );
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
        $customer = Customer::find($id);

        $customer->fill( $request->all() )->save();

        return redirect()->route('admin.clientes.show', $customer->id )->with('info','Se han actualizado datos correctamente.');
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
