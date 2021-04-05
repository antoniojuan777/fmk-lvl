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
            ],
            //paises
            [
                'codigo'=>'PAS-001',
                'valor'=>'Bolivia',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-002',
                'valor'=>'Argentina',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-003',
                'valor'=>'Perú',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-004',
                'valor'=>'Venezuela',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-005',
                'valor'=>'Chile',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-006',
                'valor'=>'Brasil',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-007',
                'valor'=>'Paraguay',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-008',
                'valor'=>'Colombia',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-009',
                'valor'=>'Uruguay',
                'grupo'=>'PAISES'
            ],
            [
                'codigo'=>'PAS-010',
                'valor'=>'Ecuador',
                'grupo'=>'PAISES'
            ],
            //roles
            [
                'codigo'=>'ROL-SUP',
                'valor'=>'Super Administrador',
                'grupo'=>'ROLES'
            ],
            [
                'codigo'=>'ROL-EDU',
                'valor'=>'Educador CE',
                'grupo'=>'ROLES'
            ],
            //tipo asignacion
            [
                'codigo'=>'ASG-001',
                'valor'=>'Por Registro',
                'grupo'=>'ASIGNACIONES'
            ],
            [
                'codigo'=>'ASG-002',
                'valor'=>'Reasignación',
                'grupo'=>'ASIGNACIONES'
            ]
        ]);
    }
}
