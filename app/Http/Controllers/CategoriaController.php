<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class CategoriaController extends Controller
{
    // FUNCION QUE REGISTRA UNA CATEGORIA EN LA BASE DE DATOS
    public function RegistrarCategoria(Request $request)
    {
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        if($categoria->save())
        {
            return view('VistaAdmin/nuevaCategoria', ['error' => false, 'correcto'=> true]);
        }
        else
        {
            return view('VistaAdmin/nuevaCategoria', ['error' => true, 'correcto'=> false]);
        }
    }

    //FUNCION PARA ELIMINAR UNA CATEGORIA DE LA BASE DE DATOS
    public function EliminarCategoria($id)
    {
        $catego = Categoria::find($id);
        if($catego)
        {
            if($catego->delete())
            {
                $categorias = Categoria::paginate(20);
                return view('VistaAdmin/verCategorias',['categorias'=> $categorias, 'error' => false, 'correcto' => true]);
            }
            else
            {
                $categorias = Categoria::paginate(20);
                return view('VistaAdmin/verCategorias',['categorias'=> $categorias, 'error' => true, 'correcto' => false]);
            }
        }
        $categorias = Categoria::paginate(20);
        return view('VistaAdmin/verCategorias',['categorias'=> $categorias, 'error' => true, 'correcto' => false]);
    }

    //FUNCION PARA LISTAR LAS CATEGORIAS
    public function ListarCategorias(Request $request)
    {
        $categorias = Categoria::paginate(20);
        return view('VistaAdmin/verCategorias',['categorias'=> $categorias, 'error' => false, 'correcto' => false]);
    }
}
