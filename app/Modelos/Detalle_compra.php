<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Detalle_compra extends Model
{
    protected $table = "detalle_compra";
    protected $fillable =['compra_id','producto_id','cantidad','precio_compra','precio_venta','status'];

    public function compras(){
        return $this->belongsTo('App\Modelos\Compras','compra_id','id');
    }

    public function productos (){
        return $this->belongsTo('App\Modelos\Productos','producto_id','id');
    }
}
