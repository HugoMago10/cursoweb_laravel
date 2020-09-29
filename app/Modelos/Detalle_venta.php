<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    protected $table = "detalle_venta";
    protected $fillable = ['venta_id','producto_id','cantidad','precio_venta','status'];

    public function ventas(){
        return $this->belongsTo('App\Modelos\Ventas','venta_id','id');
    }

    public function productos(){
        return $this->belongsTo('App\Modelos\Productos','producto_id','id');
    }
}
