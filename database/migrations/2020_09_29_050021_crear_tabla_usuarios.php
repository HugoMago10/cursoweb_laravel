<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',80);
            $table->string('ape_pat',80);
            $table->string('ape_mat',80);
            $table->string('email',80);
            $table->string('direccion',80);
            $table->foreignId('id_pais')->references('id')->on('paises');
            $table->foreignId('id_entidad')->references('id')->on('entidades');
            $table->foreignId('municipio_id')->constrained();//laravel 7
            $table->foreignId('id_tipo_usua')->references('id')->on('tipo_usuarios');
            $table->string('colonia',80);
            $table->integer('cp');
            $table->date('fecha_naci');
            $table->string('username',80);
            $table->string('password',80);
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
        Schema::dropIfExists('usuarios');
    }
}
