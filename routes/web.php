<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::redirect('/', 'bienvenido');
Route::get('bienvenido', 'Login\LoginController@login')->name('logeate');

Route::get('home', 'Admin\AdminController@index')->name('home');

Route::resource('clientes', 'Admin\ClientesController');
Route::resource('doctores', 'Admin\DoctoresController');
Route::resource('tratamientos', 'Admin\TratamientosController');
Route::resource('inventario', 'Admin\InventarioController');
Route::resource('notas', 'Admin\NotasController');
Route::resource('citas', 'Admin\CitasController');

Route::get('cliente', 'Admin\ClientesController@create')->name('cli_index');
Route::get('doctor', 'Admin\DoctoresController@create')->name('doc_index');
Route::get('tratamiento', 'Admin\TratamientosController@create')->name('treat_index');

//buscador ajax Clientes y Pacientes para asignar tratamientos
Route::get('livesearch','Admin\ClientesController@liveSearch');
Route::get('livesearchpatient','Admin\ClientesController@patientSearch');
Route::get('tratamiento_cliente', 'Admin\TratamientosController@assignmentTreatmentPatient');

//pasos cita
Route::post('buscar_pac','Admin\PasosController@buscar_paciente')->name('buscar_paciente');
Route::get('buscar_fecha/{id}','Admin\PasosController@buscar_fecha')->name('buscar_fecha');

//ajax citas
Route::post('actualizar_cita', 'Admin\PasosController@actualizar_cita');
Route::post('eliminar_cita', 'Admin\PasosController@eliminar_cita');
Route::post('buscar_cita', 'Admin\PasosController@buscar_cita');


//citas
//Route::get('citas','Admin\CitaController@index')->name('citas');
Route::post('search','Admin\CitaController@searchCustomer');
Route::post('search_cita','Admin\CitaController@searchQuote');
Route::post('add_cita','Admin\CitaController@addQuote');
Route::post('del_cita','Admin\CitaController@deleteQuote');
Route::post('edit_cita','Admin\CitaController@editQuote');
Route::post('update_cita','Admin\CitaController@updateQuote');

Route::get('quote/{id}','Admin\CitaController@createQuote')->name('crear_cita');
