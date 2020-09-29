<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string ('nombre',80);
            $table->string ('descripcion',80);
            $table->integer('existencia');
            $table->foreignId('id_tipo_venta')->references('id')->on('tipo_venta');
            $table->double('precio_compra', 6, 2);
            $table->double('precio_venta', 6,2);
            $table->integer('stock');
            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('municipio_id')->constrained();//laravel 7
            $table->foreignId('id_proveedor')->references('id')->on('provedores');
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
        Schema::dropIfExists('productos');
    }
}
