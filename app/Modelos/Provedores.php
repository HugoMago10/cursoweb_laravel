<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Provedores extends Model
{
    protected $table = "provedores";
    protected $fillable = ['nombre','rfc','razon_social','direccion','email','contacto','id_pais','id_entidad',
    'municipio_id','cp','colonia','telefono','status'];

    public function paises (){
        return $this->belongsTo('App\Modelos\Paises','id_pais','id');
    }
    public function entidades (){
        return $this->belongsTo('App\Modelos\Entidades','id_entidad','id');
    }
    public function municipios (){
        return $this->belongsTo('App\Modelos\Municipios','municipio_id','id');
    }
}
