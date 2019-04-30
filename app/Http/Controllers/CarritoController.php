<?php

namespace App\Http\Controllers;

use App\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{

    public function agregarCarrito(Request $request)
    {
        //$request->session()->get('idUsuario'),

        $idUsuario = $request->session()->get('idUsuario');
        $idProducto = $request->idproducto;

        $product = Carrito::where('iduser', '=', $idUsuario)
            ->where('idproducto', '=', $idProducto)
        ;

        $num = $product->count();
        if ($num > 0) {
            $temp1 = $product->first();

            $product->update([
                'cantidad' => $temp1->cantidad + 1,
            ]);

        } else {
            $item = new Carrito([
                'iduser' => $idUsuario,
                'idproducto' => $idProducto,
                'cantidad' => 1,
            ]);
            $item->save();
        }

        error_log("entro");

        error_log($request->session()->get('idUsuario'));
        error_log($request->idproducto);

        return redirect('/Catalogo');

        //return redirect('Crear_Empleado')->with('success','Se registró correctamente el empleado');
    }

    public function index(Request $request)
    {
        $idUsuario = $request->session()->get('idUsuario');

        $carrito = DB::table('carritos')
            ->join('productos', 'productos.idproducto', '=', 'carritos.idproducto') //nombreUsuario
            ->where('carritos.iduser', '=', $idUsuario)
            ->select('productos.nombre as nombre',
                'productos.precio as precio',
                'productos.idproducto as idproducto',
                'carritos.cantidad as cantidad'
            )
            ->get();

        return view('VistaCliente/carrito', compact('carrito'));
    }

    public function getCatalogo()
    {

    }

    public function p_registrar(Request $request)
    {

        error_log($request);
        $respuesta = array("respuesta" => 1);
        return response()->json($respuesta);
    }

    public function p_login(Request $request)
    {

        error_log($request);
        $respuesta = array(
            "respuesta" => 1,
            "idUsuario" => 32,
        );
        return response()->json($respuesta);
    }

    public function p_asociar(Request $request)
    {

        error_log($request);
        $respuesta =
        array(
            "cuentas" => array(
                array(
                    "correo" => "perez",
                    "idUsuario" => 32,
                ), array(
                    "correo" => "juanez",
                    "idUsuario" => 43,
                ), array(
                    "correo" => "prro",
                    "idUsuario" => 22,
                ),
            ),
        );
        return response()->json($respuesta);
    }


    public function p_compra(Request $request){
 
        
        $idUsuario = $request->session()->get('idUsuario');
        
        $carrito = DB::table('carritos')
            ->where('carritos.iduser', '=', $idUsuario)
            ->delete();
 
        return redirect('cliente')->with('success1',"Compra realizada exitosamente");   
    }

}
