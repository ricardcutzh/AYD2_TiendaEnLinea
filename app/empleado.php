<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    //
    //LLAVE PRIMARIA DEL MODELO
    protected $primaryKey = "id";

    //DEFINIENDO LA TABLA
    protected $table = "empleados";

    //ATRIBUTOS QUE SE PUEDEN LLENAR
    protected $fillable = [
        'nombre', 'apellido','cui','email','edad','direccion'
    ];

    public function getEmpleados()
    {
        return $this->hasMany('App\empleado');
    }
}
