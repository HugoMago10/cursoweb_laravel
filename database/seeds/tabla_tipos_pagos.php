<?php

use Illuminate\Database\Seeder;

class tabla_tipos_pagos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_pago')->insert([
            'nombre'=>'EFECTIVO',
            'status'=>1
        ]);
        DB::table('tipo_pago')->insert([
            'nombre'=>'CHEQUE',
            'status'=>1
        ]);
        DB::table('tipo_pago')->insert([
            'nombre'=>'TRANSFERENCIA',
            'status'=>1
        ]);
        DB::table('tipo_pago')->insert([
            'nombre'=>'DEPOSITO',
            'status'=>1
        ]);
    }
}
