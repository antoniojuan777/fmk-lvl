<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peticion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticiones', function (Blueprint $table) {
            $table->id();
            $table->boolean('apoyo_economico')->default(false);
            $table->boolean('atencion_parto')->default(false);
            $table->boolean('derivacion_canalizacion')->default(false);
            $table->boolean('cita_coloquio')->default(false);
            $table->boolean('consejo_orientacion')->default(false);
            $table->boolean('servicios_legales')->default(false);
            $table->boolean('fianzas_conmutas')->default(false);
            $table->boolean('formacion_capacitacion')->default(false);
            $table->boolean('guarderia_kinder')->default(false);
            $table->boolean('hospitalizacion_medica')->default(false);
            $table->boolean('informacion')->default(false);
            $table->boolean('integracion_comunitaria')->default(false);
            $table->boolean('internamiento')->default(false);
            $table->boolean('organizacion_planeacion')->default(false);
            $table->boolean('internamiento_forzado')->default(false);
            $table->boolean('recuperacion_escolar')->default(false);
            $table->boolean('sevicio_social')->default(false);
            $table->boolean('terapia')->default(false);
            $table->boolean('visita_familiar')->default(false);
            $table->boolean('examenes_cuidados_med')->default(false);
            $table->boolean('alimentacion')->default(false);
            $table->boolean('servicio_higiene')->default(false);
            $table->boolean('ocupacion_trabajo')->default(false);
            $table->boolean('medicamentos')->default(false);
            $table->boolean('burocratico')->default(false);
            $table->boolean('otro')->default(false);
            $table->integer('parcero_id')->unsigned();
            $table->foreign('parcero_id')->references('id')->on('parceros');
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
        Schema::dropIfExists('peticiones');
    }
}
