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

Route::get('/', function () {
    return view('welcome');
});

/** RUTAS PARA PROBAR EL LONGIN **/
/**
 * ESTE METODO SE COMUNICA CON EL LOGINCONTROLLER EN EL METODO LOGIN
 * SE NECESITA MANDAR: email y password en el REQUEST
 */
Route::name('login')->post('/Login', 'LogInController@Login');

/**
 * METODO QUE SE COMUNICOA CON USER CONTROLLER EN EL METODO REGISTRACLIENTE
 * SE NECESITA MANDAR: nombre, email y password
 */
Route::name('registrar')->post('/Registrar', 'UserController@RegistrarCliente');