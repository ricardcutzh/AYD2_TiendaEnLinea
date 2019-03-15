<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
class UserController extends Controller
{
    /**
     * METODO PARA REGISTRAR UN USUARIO EN EL SISTEMA
     */

     public function RegistrarCliente(Request $request)
     {
         $rules = array(
            'nombre' => 'required',
            'email' => 'required',
            'password' => 'required',
         );

         $validator = Validator::make($request->all(), $rules);

         if($validator->fails())
        {
            //dd($validator->messages()); <---- ES PARA MANDAR MENSAJES DE QUE PORQUE FALLO A LA VISTA

            return redirect('registro')->with('danger','Datos requeridos no cumplidos');
        }
        else
        {
            $usuario = User::create(array(
                'nombre'=>$request->nombre, 
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'idrol' => 2
            ));

            $usuario->save();

            return redirect('login')->with('success','Usuario creado exitosamente, por favor inice sesion');
        }
     }
}
