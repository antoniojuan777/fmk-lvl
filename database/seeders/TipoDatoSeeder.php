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
            ],
            //tpo conocimiento de la organizacion
            [
                'codigo'=>'CON-001',
                'valor'=>'Por si misma',
                'grupo'=>'MEDIO CONOCIMIENTO ORGANIZACION'
            ],
            [
                'codigo'=>'CON-002',
                'valor'=>'Por medio de un amigo',
                'grupo'=>'MEDIO CONOCIMIENTO ORGANIZACION'
            ],
            [
                'codigo'=>'CON-003',
                'valor'=>'Por medio de un miembro de la familia',
                'grupo'=>'MEDIO CONOCIMIENTO ORGANIZACION'
            ],
            [
                'codigo'=>'CON-004',
                'valor'=>'Por medio de un conocido',
                'grupo'=>'MEDIO CONOCIMIENTO ORGANIZACION'
            ],
            [
                'codigo'=>'CON-005',
                'valor'=>'Por medio de otra institución',
                'grupo'=>'MEDIO CONOCIMIENTO ORGANIZACION'
            ],
            [
                'codigo'=>'CON-006',
                'valor'=>'Otro',
                'grupo'=>'MEDIO CONOCIMIENTO ORGANIZACION'
            ],
            [
                'codigo'=>'CON-007',
                'valor'=>'Por medio de la institución misma',
                'grupo'=>'MEDIO CONOCIMIENTO ORGANIZACION'
            ],
            //
            [
                'codigo'=>'REL-001',
                'valor'=>'Es la misma persona',
                'grupo'=>'RELACION PACIENTE'
            ],
            [
                'codigo'=>'REL-002',
                'valor'=>'Es un amigo',
                'grupo'=>'RELACION PACIENTE'
            ],
            [
                'codigo'=>'REL-003',
                'valor'=>'Es miembro de la familia de origen',
                'grupo'=>'RELACION PACIENTE'
            ],
            [
                'codigo'=>'REL-004',
                'valor'=>'Miembro de su familia propia',
                'grupo'=>'RELACION PACIENTE'
            ],
            [
                'codigo'=>'REL-005',
                'valor'=>'Es una institución, organización o grupo',
                'grupo'=>'RELACION PACIENTE'
            ],
            [
                'codigo'=>'REL-006',
                'valor'=>'Otro',
                'grupo'=>'RELACION PACIENTE'
            ]
        ]);
    }
}
