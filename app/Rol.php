<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    // LLAVE PRIMARIA DE LA TABLA
    protected $primaryKey = "idrol";
    
    //ATRIBUTOS QUE SE LLENARAN
    protected $fillable = [
        'nombre', 'estado', 
    ];


    public function getUsers()
    {
        return $this->hasMany('App\User');
    }
}
