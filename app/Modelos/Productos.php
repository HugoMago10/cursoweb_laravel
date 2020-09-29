<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table= "productos";
    protected $fillable = ['nombre','descripcion','existencia','id_tipo_venta','precio_compra','precio_venta','stock',
        'categoria_id','id_provedor','status'];

    public function tipos_venta(){
        return $this->belongsTo('App\Modelos\Tipos_venta','id_tipo_venta','id');
    }
    public function categorias(){
        return $this->belongsTo('App\Modelos\Tipos_venta','categoria_id','id');
    }
    public function provedores(){
        return $this->belongsTo('App\Modelos\Provedores','id_provedor','id');
    }
}
