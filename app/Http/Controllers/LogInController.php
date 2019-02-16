<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class LogInController extends Controller
{
    /**
     * METODO QUE SE ENCARGA DEL LOG IN
     */
    public function Login(Request $request)
    {
        //REGLAS DE VALIDACION
        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );

        //VALIDANDO REGLAS
        $validator = Validator::make($request->all(), $rules);

        //HACIENDO EL LOGIN
        if($validator->fails())
        {
            //dd($validator->messages()); <---- ES PARA MANDAR MENSAJES DE QUE PORQUE FALLO A LA VISTA
            return "DATOS REQUERIDOS NO CUMPLIDOS";
        }
        else
        {
            if(Auth::attempt(['email'=> $request->email, 'password' => $request->password]))
            {
                /**
                 * SI EL USUARIO EXISTE EN LA BASE DE DATOS ENTONCES RETORNA A LA VISTA CORRESPONDIENTE
                 * 
                 */
                $usuario = Auth::user(); //<------ ESTA VARIABLE SE PUEDE ENVIAR A LA VISTA PARA DESPLEGAR INFO DEL USUARIO EN SESSION
                return "SI LOGRO HACER LOGIN";
            }
            else
            {
                /**
                 * DE LO CONTRARIO ENTONCES PUEDE REDIRECCIONAR AL LOG IN DE NUEVO
                 */
                return "USUARIO NO EXISTE EN BASE DE DATOS";
            }
        }
    }
}
