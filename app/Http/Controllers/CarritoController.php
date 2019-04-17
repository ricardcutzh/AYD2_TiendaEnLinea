<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use Illuminate\Support\Facades\DB; 
class CarritoController extends Controller
{
    

    public function agregarCarrito(Request $request)
    {
        //$request->session()->get('idUsuario'),
     

        $idUsuario=$request->session()->get('idUsuario');
        $idProducto=$request->idproducto;

        $product = Carrito::where('iduser', '=', $idUsuario)
            ->where('idproducto', '=', $idProducto)
            ;


        $num = $product->count();
        if ($num > 0) {
            $temp1=$product->first();

            $product->update([
                'cantidad'=>$temp1->cantidad+1
            ]);


        }else{
            $item = new Carrito([
                'iduser' =>  $idUsuario,
                'idproducto' => $idProducto,
                'cantidad' => 1
                ]); 
            $item->save();
        }



        error_log("entro");

        error_log($request->session()->get('idUsuario'));
        error_log($request->idproducto);


        return redirect('/Catalogo'); 
        
        //return redirect('Crear_Empleado')->with('success','Se registró correctamente el empleado');
    }

 
    public function index(Request $request ){ 
        $idUsuario=$request->session()->get('idUsuario');

        $carrito = DB::table('carritos')
            ->join('productos', 'productos.idproducto', '=', 'carritos.idproducto') //nombreUsuario
            ->where('carritos.iduser', '=', $idUsuario)
            ->select('productos.nombre as nombre',
            'productos.precio as precio',
            'productos.idproducto as idproducto',
            'carritos.cantidad as cantidad'
            )
            ->get();

 

        return view('VistaCliente/carrito',compact('carrito'));
    }

    public function getCatalogo(){



    }



}
