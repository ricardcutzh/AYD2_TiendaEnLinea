<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use Illuminate\Support\Facades\DB;
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
            return redirect('login')->with('danger','Datos requeridos no cumplidos');
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
                 
                if($this->esAdminsitrador($usuario)){ 
                    return redirect('Admin')->with('success',"Bienvenido Administrador"); 
                }

                error_log($this->esAdminsitrador($usuario));
                return redirect('cliente')->with('success',$request->email);   
            }
            else
            {
                /**
                 * DE LO CONTRARIO ENTONCES PUEDE REDIRECCIONAR AL LOG IN DE NUEVO
                 */
                return redirect('login')->with('danger','Usuario y/o contraseña incorrecta');
            }
        }
    }

    /**
     * METODO QUE ME RETORNA LA VISTA DEL ADMIN
     */
    public function admin(Request $request)
    {
        return view('VistaAdmin/admin');
    }


    /**
     * Verificando si el id es admin
     */
    public function esAdminsitrador($usuario)
    {
 
        $item = DB::table('users')
        ->join('rols','users.idrol', '=', 'rols.idrol') 
        ->where('users.iduser','=', $usuario['iduser'])
        ->where('rols.nombre','=',"Administrador")
        ->count();
 

        return $item>0?true:false; 
 
    }



}
