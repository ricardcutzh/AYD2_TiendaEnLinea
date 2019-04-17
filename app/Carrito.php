<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = ['iduser', 'idproducto', 'iduser', 'cantidad'];
}