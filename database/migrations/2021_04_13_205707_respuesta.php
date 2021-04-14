<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Respuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->boolean('cita')->default(false);
            $table->boolean('informacion')->default(false);
            $table->boolean('consejo_orientacion')->default(false);
            $table->boolean('canalizacion_derivacion')->default(false);
            $table->boolean('escucha_inmediata')->default(false);
            $table->boolean('indicaciones')->default(false);
            $table->boolean('acompaniamiento')->default(false);
            $table->boolean('cuidados_medicos')->default(false);
            $table->boolean('higiene')->default(false);
            $table->boolean('acogida')->default(false);
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
        Schema::dropIfExists('respuestas');
    }
}
