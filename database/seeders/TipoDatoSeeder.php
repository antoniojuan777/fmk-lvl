<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_datos')->insert([
            //servicios
            [
                'codigo'=>'SRV-001',
                'valor'=>'Centro Residencial',
                'grupo'=>'SERVICIOS'
            ],
            [
                'codigo'=>'SRV-002',
                'valor'=>'Centro no Residencial',
                'grupo'=>'SERVICIOS'
            ],
            [
                'codigo'=>'SRV-003',
                'valor'=>'Unidad de calle',
                'grupo'=>'SERVICIOS'
            ],
            [
                'codigo'=>'SRV-004',
                'valor'=>'Centro de bajo umbral',
                'grupo'=>'SERVICIOS'
            ],
            [
                'codigo'=>'SRV-005',
                'valor'=>'Unidad de prevención',
                'grupo'=>'SERVICIOS'
            ],
            [
                'codigo'=>'SRV-006',
                'valor'=>'Otro',
                'grupo'=>'SERVICIOS'
            ],
            //formas de contactos
            [
                'codigo'=>'FCO-001',
                'valor'=>'Por teléfono',
                'grupo'=>'FORMAS-CONTACTOS'
            ],
            [
                'codigo'=>'FCO-002',
                'valor'=>'En la estructura de la organización',
                'grupo'=>'FORMAS-CONTACTOS'
            ],
            [
                'codigo'=>'FCO-003',
                'valor'=>'Unidad de calle',
                'grupo'=>'FORMAS-CONTACTOS'
            ],
            [
                'codigo'=>'FCO-004',
                'valor'=>'En la casa de la persona',
                'grupo'=>'FORMAS-CONTACTOS'
            ],
            [
                'codigo'=>'FCO-005',
                'valor'=>'En otras instituciones',
                'grupo'=>'FORMAS-CONTACTOS'
            ],
            [
                'codigo'=>'FCO-006',
                'valor'=>'Otro',
                'grupo'=>'FORMAS-CONTACTOS'
            ]
        ]);
    }
}
