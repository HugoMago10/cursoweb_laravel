<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Tipos_venta extends Model
{
    protected $table = "tipo_venta";
    protected $fillable = ['nombre','status'];
}
