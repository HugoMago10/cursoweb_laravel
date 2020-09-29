<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente')->references('id')->on('usuarios');
            $table->date('fecha');
            $table->double('subtotal', 9,2);
            $table->double('iva', 9,2);
            $table->double('total', 9,2);
            $table->foreignId('id_tipo_pago')->references('id')->on('tipo_pago');
            $table->foreignId('usuario_id')->constrained();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
