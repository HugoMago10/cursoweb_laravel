<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = "ventas";
    protected $fillable = ['id_cliente','fecha','subtotal','iva','total','id_tipo_pago','usuario_id','status'];

    public function clientes (){
        return $this->belongsTo('App\Modelos\Usuario','id_cliente', 'id');
    }

    public function usuarios (){
        return $this->belongsTo('App\Modelos\Usuario','usuario_id', 'id');
    }
}
