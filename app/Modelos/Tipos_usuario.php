<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Tipos_usuario extends Model
{
    protected $table = 'tipo_usuarios';
    protected $fillabel = ['nombre','nivel','status'];
}
