<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Familia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->string('estado_familiar',10)->unsigned()->nullable();
            $table->foreign('estado_familiar')->references('codigo')->on('tipos_datos');
            $table->string('numero_matrimonio',10)->unsigned()->nullable();
            $table->foreign('numero_matrimonio')->references('codigo')->on('tipos_datos');
            $table->string('numero_esposo',10)->unsigned()->nullable();
            $table->foreign('numero_esposo')->references('codigo')->on('tipos_datos');
            $table->string('estructura_familiar',10)->unsigned()->nullable();
            $table->foreign('estructura_familiar')->references('codigo')->on('tipos_datos');
            $table->string('escolaridad',10)->unsigned()->nullable();
            $table->foreign('escolaridad')->references('codigo')->on('tipos_datos');
            $table->integer('hijos_varones')->nullable();
            $table->integer('hijas_mujeres')->nullable();
            $table->string('religion',50)->nullable();
            $table->string('nombres_apellidos_apoyo',100)->nullable();
            $table->string('celular_apoyo',10)->nullable();
            $table->boolean('sabe_escribir')->default(false);
            $table->boolean('sabe_leer')->default(false);
            $table->boolean('sabe_sumar')->default(false);
            $table->boolean('sabe_restar')->default(false);
            $table->boolean('sabe_multiplicar')->default(false);
            $table->boolean('sabe_dividir')->default(false);
            $table->boolean('sabe_calcular_promedios')->default(false);
            $table->boolean('sabe_calcular_porcentajes')->default(false);
            $table->boolean('usa_computadora')->default(false);
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
        Schema::dropIfExists('familias');
    }
}
