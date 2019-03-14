<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //LLAVE PRIMARIA
    protected $primaryKey = "idproducto";

    //TABLA A LA QUE HACE REFERENCIA
    protected $table = "productos";

    //ATRIBUTOS QUE PERMITE QUE SE LLENEN
    protected $fillable = [
        'nombre', 'descripcion', 'talla', 'img', 'precio', 'idcategoria',
    ];

    //RETORNAR LA CATEGORIA A LA QUE PERTENECE EL PRODUCTO
    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'idcategoria');
    }
}
