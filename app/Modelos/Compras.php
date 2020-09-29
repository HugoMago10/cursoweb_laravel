<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
    protected $fillable = ['id_provedor','fecha','subtotal','iva','total','usuario_id','status'];

    public function provedores(){
        return $this->belongsTo('App\Modelos\Provedores','id_provedor','id');
    }

    public function usuario(){
        return $this->belngsTo('App\Modelos\Usuario','usuario_id','status');
    }
}
