<?php

use Illuminate\Database\Seeder;

class tabla_tipos_venta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_venta')->insert([
            'nombre' => 'PIEZA',
            'status' => 1
        ]);
        DB::table('tipo_venta')->insert([
            'nombre' => 'KILOS',
            'status' => 1
        ]);
        DB::table('tipo_venta')->insert([
            'nombre' => 'CAJA',
            'status' => 1
        ]);
    }
}
