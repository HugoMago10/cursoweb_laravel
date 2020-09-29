<?php

use Illuminate\Database\Seeder;

class tabla_entidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var[1]="Aguascalientes";
        $var[2]="BajaCalifornia";
        $var[3]="BajaCaliforniaSur";
        $var[4]="Campeche";
        $var[5]="CoahuiladeZaragoza";
        $var[6]="Colima";
        $var[7]="Chiapas";
        $var[8]="Chihuahua";
        $var[9]="DistritoFederal";
        $var[10]="Durango";
        $var[11]="Guanajuato";
        $var[12]="Guerrero";
        $var[13]="Hidalgo";
        $var[14]="Jalisco";
        $var[15]="México";
        $var[16]="MichoacándeOcampo";
        $var[17]="Morelos";
        $var[18]="Nayarit";
        $var[19]="NuevoLeón";
        $var[20]="Oaxaca";
        $var[21]="Puebla";
        $var[22]="Querétaro";
        $var[23]="QuintanaRoo";
        $var[24]="SanLuisPotosí";
        $var[25]="Sinaloa";
        $var[26]="Sonora";
        $var[27]="Tabasco";
        $var[28]="Tamaulipas";
        $var[29]="Tlaxcala";
        $var[30]="VeracruzdeIgnaciodelaLlave";
        $var[31]="Yucatán";
        $var[32]="Zacatecas";

        for ( $i = 1; $i<=32; $i++ ){
            DB::table('entidades')->insert([
                'clave_pais' => 'MX',
                'nombre' => $var[$i],
                'status'=>1
            ]);
        }
    }
}
