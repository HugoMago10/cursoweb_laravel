<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['nombre','ape_pat','ape_mat','email','telefono','direccion','id_pais','id_entidad','municipio_id','id_tipo_usua',
        'colonia','cp','fecha_naci','username','password','status'];

    public function paises (){
        return $this->belongsTo('App\Modelos\Paises','id_pais','id');
    }

    public function entidades (){
        return $this->belongsTo('App\Modelos\Entidades','id_entidad','id');
    }

    public function municipios(){
        return $this->belongsTo('App\Modelos\Municipios','municipio_id', 'id');
    }

    public function tipos_usuario(){
        return $this->belongsTo('App\Modelos\Tipos_usuario','id_tipo_usua','id');
    }
    
}
