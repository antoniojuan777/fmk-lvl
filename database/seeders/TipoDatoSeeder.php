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
            ],
            //ESTADOS FAMILIARES
            [
                'codigo'=>'FAM-001',
                'valor'=>'Soltero/a',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            [
                'codigo'=>'FAM-002',
                'valor'=>'Casado/a',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            [
                'codigo'=>'FAM-003',
                'valor'=>'Separado/a',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            [
                'codigo'=>'FAM-004',
                'valor'=>'Viudo/a',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            [
                'codigo'=>'FAM-005',
                'valor'=>'Divorciado/a',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            [
                'codigo'=>'FAM-006',
                'valor'=>'Poligamia',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            [
                'codigo'=>'FAM-007',
                'valor'=>'Unión Libre',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            [
                'codigo'=>'FAM-008',
                'valor'=>'Otro',
                'grupo'=>'ESTADO FAMILIAR'
            ],
            //NUMERO MATRIMONIO
            [
                'codigo'=>'NMT-001',
                'valor'=>'Primer Matrimonio',
                'grupo'=>'NUMERO MATRIMONIO'
            ],
            [
                'codigo'=>'NMT-002',
                'valor'=>'Segundo Matrimonio',
                'grupo'=>'NUMERO MATRIMONIO'
            ],
            [
                'codigo'=>'NMT-003',
                'valor'=>'Tercer Matrimonio',
                'grupo'=>'NUMERO MATRIMONIO'
            ],
            [
                'codigo'=>'NMT-004',
                'valor'=>'Otro',
                'grupo'=>'NUMERO MATRIMONIO'
            ],
            //NUMERO ESPOSO
            [
                'codigo'=>'NES-001',
                'valor'=>'Primer Esposo/a',
                'grupo'=>'NUMERO ESPOSO'
            ],
            [
                'codigo'=>'NES-002',
                'valor'=>'Segundo Esposo/a',
                'grupo'=>'NUMERO ESPOSO'
            ],
            [
                'codigo'=>'NES-003',
                'valor'=>'Tercer Esposo/a',
                'grupo'=>'NUMERO ESPOSO'
            ],
            [
                'codigo'=>'NES-004',
                'valor'=>'Otro',
                'grupo'=>'NUMERO ESPOSO'
            ],
            //ESTRUCTURA FAMILIAR
            [
                'codigo'=>'EFA-001',
                'valor'=>'Vive Solo/a',
                'grupo'=>'ESTRUCTURA FAMILIAR'
            ],
            [
                'codigo'=>'EFA-002',
                'valor'=>'Vive Solo/a con hijos/as',
                'grupo'=>'ESTRUCTURA FAMILIAR'
            ],
            [
                'codigo'=>'EFA-003',
                'valor'=>'Familia nuclear',
                'grupo'=>'ESTRUCTURA FAMILIAR'
            ],
            [
                'codigo'=>'EFA-004',
                'valor'=>'Familia sin matrimonio formal',
                'grupo'=>'ESTRUCTURA FAMILIAR'
            ],
            [
                'codigo'=>'EFA-005',
                'valor'=>'Otro',
                'grupo'=>'ESTRUCTURA FAMILIAR'
            ],
            [
                'codigo'=>'EFA-006',
                'valor'=>'Pareja sin matrimonio',
                'grupo'=>'ESTRUCTURA FAMILIAR'
            ],
            //ESCOLARIDAD
            [
                'codigo'=>'ESC-001',
                'valor'=>'Primaria completa (6 años)',
                'grupo'=>'ESCOLARIDAD'
            ],
            [
                'codigo'=>'ESC-002',
                'valor'=>'Secundaria  (6 + 3)',
                'grupo'=>'ESCOLARIDAD'
            ],
            [
                'codigo'=>'ESC-003',
                'valor'=>'Diploma universitario (tecnico)',
                'grupo'=>'ESCOLARIDAD'
            ],
            [
                'codigo'=>'ESC-004',
                'valor'=>'Diploma universitario (profesional)',
                'grupo'=>'ESCOLARIDAD'
            ],
            [
                'codigo'=>'ESC-005',
                'valor'=>'Postgrado',
                'grupo'=>'ESCOLARIDAD'
            ],
            [
                'codigo'=>'ESC-006',
                'valor'=>'Otro',
                'grupo'=>'ESCOLARIDAD'
            ],
            //EMPLEO
            [
                'codigo'=>'EMP-001',
                'valor'=>'Altos ejecutivos, profesionales, dueños de grandes empresas',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-002',
                'valor'=>'Gerentes profesionales (enfermeros, optómetras, framacéuticos, profesores, etc.)',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-003',
                'valor'=>'Personal administrativo, gerentes, profesionales, dueños de pequeños negocios (panaderia, etc)',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-004',
                'valor'=>'Trabajadores de oficina y vendedores, técnicos, comercios pequeños',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-005',
                'valor'=>'Trabajadores diestros con entrenamiento previo (panadero, barbero, electricista, bombero, etc)',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-006',
                'valor'=>'Semi-diestro (ayudante de hospital, camarero, conductor, cocinero, guardia, etc)',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-007',
                'valor'=>'trabajadores no diestros (servicio doméstico, ayudante construcción, obrero, etc.)',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-008',
                'valor'=>'Ama de casa',
                'grupo'=>'EMPLEO'
            ],
            [
                'codigo'=>'EMP-009',
                'valor'=>'Estudiantes, personas con incapacidades, personas sin profesión',
                'grupo'=>'EMPLEO'
            ]
        ]);
    }
}
