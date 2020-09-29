<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Tipo_pago extends Model
{
    protected $table = "tipo_pago";
    protected $fillable = ['nombre','status'];
}
