<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Fotos_productos extends Model
{
    protected $table ='fotos_produtos';
    protected $fillable = ['producto_id','ruta','status'];

    public function productos (){
        return $this->belongsTo('App\Modelos\Productos','producto_id','id');
    }
}
