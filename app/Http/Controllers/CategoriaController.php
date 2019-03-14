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
            return "Categoria guardada";
        }
        else
        {
            return "fallo guardar categoria";
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
                return "categoria eliminada";
            }
            else
            {
                return "fallo eliminar la categoria";
            }
        }
        return "no existe esta categoria";
    }

    //FUNCION PARA LISTAR LAS CATEGORIAS
    public function ListarCategorias(Request $request)
    {
        dd(Categoria::all());
        return "listar todas las categorias";
    }
}
