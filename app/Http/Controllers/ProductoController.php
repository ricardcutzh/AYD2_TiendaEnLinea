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
        $categorias = Categoria::all();
        if($producto->save())
        {
            return view('VistaAdmin/nuevoProducto', ['error' => false, 'correcto'=> true, 'categorias'=> $categorias]);
        }
        return view('VistaAdmin/nuevoProducto', ['error' => true, 'correcto'=> false, 'categorias'=> $categorias]);
    }

    // FUNCION QUE SE ENCARGA DE ELIMINAR UN PRODUCTO
    public function EliminarProducto($id)
    {
        $producto = Producto::find($id);
        
        if($producto)
        {
            if($producto->delete())
            {
                $productos = Producto::paginate(20);
                return view('VistaAdmin/verProductos',['productos'=> $productos, 'error' => false, 'correcto' => true]);
            }
            else
            {
                $productos = Producto::paginate(20);
                return view('VistaAdmin/verProductos',['productos'=> $productos, 'error' => true, 'correcto' => false]);
            }
        }
        $productos = Producto::paginate(20);
        return view('VistaAdmin/verProductos',['productos'=> $productos, 'error' => true, 'correcto' => false]);
    }

    //FUNCION QUE SE ENCARGA DE LISTAR LOS PRODUCTOS EXISTENTES
    public function ListarProductos(Request $request)
    {
        $productos = Producto::paginate(20);
        return view('VistaAdmin/verProductos',['productos'=> $productos, 'error' => false, 'correcto' => false]);
    }

    public function getPageNewProduct(Request $request)
    {
        $categorias = Categoria::all();
        return view('VistaAdmin/nuevoProducto', ['error' => false, 'correcto'=> false, 'categorias'=> $categorias]);
    }

    public function getCatalogo(Request $request)
    {
        $productos = Producto::paginate(20);
        return view('VistaCliente/catalogo', ['productos'=> $productos]);
    }
}
