<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class ProductoController extends Controller
{
    // FUNCION QUE REGISTRA UN PRODUCTO
    public function RegistrarProducto(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->talla = $request->talla;
        $producto->img = $request->img;
        $producto->precio = $request->precio;
        $producto->idcategoria = $request->idcategoria;
        $producto->save();
        return "registrar un producto";
    }

    // FUNCION QUE SE ENCARGA DE ELIMINAR UN PRODUCTO
    public function EliminarProducto($id)
    {
        $producto = Producto::find($id);
        if($producto)
        {
            if($producto->delete())
            {
                return "producto eliminado";
            }
            else
            {
                return "fallo eliminar el producto";
            }
        }
        return "no existe el producto";
    }

    //FUNCION QUE SE ENCARGA DE LISTAR LOS PRODUCTOS EXISTENTES
    public function ListarProductos(Request $request)
    {
        dd(Producto::all());
        return "listando los productos";
    }
}
