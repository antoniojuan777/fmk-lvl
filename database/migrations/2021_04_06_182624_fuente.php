<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fuente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_apellidos');
            $table->string('celular')->nullable();
            $table->integer('edad')->nullable();
            $table->string('genero', 1);
            $table->string('medio_conocimiento_org',10)->unsigned()->nullable();
            $table->foreign('medio_conocimiento_org')->references('codigo')->on('tipos_datos');
            $table->string('relacion_paciente',10)->unsigned()->nullable();
            $table->foreign('relacion_paciente')->references('codigo')->on('tipos_datos');
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
        Schema::dropIfExists('fuentes');
    }
}
