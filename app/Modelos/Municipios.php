<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = 'municipios';
    protected $fillable = ['id_entidad','nombre','status'];

    public function entidades (){
        //ligando la llave foranea id_entidad con id del modelo Entidades
        return $this->belongsTo('App\Modelos\Entidades','id_entidad','id');
    }
}
