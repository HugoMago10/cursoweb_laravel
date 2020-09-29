<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $table = 'paises';
    protected $fillable = ['nombre','clave','status'];
}
