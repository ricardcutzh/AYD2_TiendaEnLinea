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

/*
+---------------------------
| VISTAS
+---------------------------
*/ 
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('LoginRegistro/login');
});


Route::get('/registro', function () {
    return view('LoginRegistro/registro');
});
/*
+------------
| Vista clientes
*/ 
Route::get('/cliente', function () {
    return view('VistaCliente/cliente');
});

/** RUTAS PARA PROBAR EL LONGIN **/
/**
 * ESTE METODO SE COMUNICA CON EL LOGINCONTROLLER EN EL METODO LOGIN
 * SE NECESITA MANDAR: email y password en el REQUEST
 */
Route::post('Login', 'LogInController@Login');

/**
 * METODO QUE SE COMUNICOA CON USER CONTROLLER EN EL METODO REGISTRACLIENTE
 * SE NECESITA MANDAR: nombre, email y password
 */
Route::post('Registrar', 'UserController@RegistrarCliente');