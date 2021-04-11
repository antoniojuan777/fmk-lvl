<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Condicion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condiciones', function (Blueprint $table) {
            $table->id();
            $table->boolean('sustancias_alcohol')->default(false);
            $table->boolean('conductas_antisociales')->default(false);
            $table->boolean('psiquiatricas')->default(false);
            $table->boolean('conductuales')->default(false);
            $table->boolean('relacionales')->default(false);
            $table->boolean('violencia_familiar')->default(false);
            $table->boolean('violacion')->default(false);
            $table->boolean('trabajo_sexual')->default(false);
            $table->boolean('legal')->default(false);
            $table->boolean('embarazo_parto')->default(false);
            $table->boolean('enfermedades')->default(false);
            $table->boolean('pobreza_extrema')->default(false);
            $table->boolean('vida_calle')->default(false);
            $table->boolean('apoyo_economico')->default(false);
            $table->boolean('escolares')->default(false);
            $table->boolean('exclusion_grave')->default(false);
            $table->boolean('violencia_intracom')->default(false);
            $table->boolean('redes_interinst')->default(false);
            $table->boolean('crisis_psicologica')->default(false);
            $table->boolean('capacitacion_formacion')->default(false);
            $table->boolean('oganizacion_planeacion')->default(false);
            $table->boolean('hiv')->default(false);
            $table->boolean('ets')->default(false);
            $table->boolean('aids')->default(false);
            $table->boolean('sin_trabajo')->default(false);
            $table->boolean('tb')->default(false);
            $table->boolean('problemas_familiares')->default(false);
            $table->boolean('tep_lt')->default(false);
            $table->boolean('tep_st')->default(false);
            $table->boolean('problemas_sexuales')->default(false);
            $table->boolean('violacion_ninio')->default(false);
            $table->boolean('otras_depedencias')->default(false);
            $table->boolean('drogas_intravena')->default(false);
            $table->boolean('otros')->default(false);
            $table->boolean('hepatitis')->default(false);
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
        Schema::dropIfExists('condiciones');
    }
}