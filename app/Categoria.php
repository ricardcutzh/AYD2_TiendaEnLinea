<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //LLAVE PRIMARIA DEL MODELO
    protected $primaryKey = "idcategoria";

    //DEFINIENDO LA TABLA
    protected $table = "categorias";

    //ATRIBUTOS QUE SE PUEDEN LLENAR
    protected $fillable = [
        'nombre', 'descripcion',
    ];

    public function getProductos()
    {
        return $this->hasMany('App\Producto');
    }
}
