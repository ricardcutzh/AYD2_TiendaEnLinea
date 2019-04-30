<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleado;

use Illuminate\Support\Facades\DB;
class EmpleadoController extends Controller
{
    // FUNCION QUE REGISTRA UN PRODUCTO
    public function RegistrarEmpleado(Request $request)
    {
        $producto = new empleado;
        $producto->nombre = $request->nombre;
        $producto->apellido = $request->apellido;
        $producto->cui = $request->cui;
        $producto->email = $request->email;
        $producto->edad = $request->edad;
        $producto->direccion = $request->direccion;
        $producto->save();/* 
        error_log("Se registro el empleado");
        return "registrar un empleado"; */
        return redirect('Crear_Empleado')->with('success','Se registró correctamente el empleado');
    }

    // FUNCION QUE SE ENCARGA DE ELIMINAR UN PRODUCTO
    public static function  eliminar($id)
    {
        
        $producto = empleado::find($id);
        if($producto)
        {
            if($producto->delete())
            { 
                return redirect('Empleados')->with('success','Se eliminó correctamente el empleado');
            }
            else
            { 
                return redirect('Empleados')->with('danger','Falló eliminar el empleado');
            }
        } 
        return redirect('Empleados')->with('danger','No existe el empleado');
    } 
 


    //FUNCION QUE SE ENCARGA DE LISTAR LOS PRODUCTOS EXISTENTES
    public function ListarEmpleados(Request $request)
    { 
        $news = DB::table('empleados') 
            ->get();
        return response()->json($news); 
    }



    /*
    |--------------------------------------------------------------------------
    | [VISTA]Mostrar en la página la lista de noticias
    |--------------------------------------------------------------------------
    | Listado de todas las noticias pero en la vista listaNoticias
    |
    */
    public function index(){
        $empleado=\App\empleado::all();
        return view('VistaAdmin/listaEmpleado',compact('empleado'));
    }
    
}
