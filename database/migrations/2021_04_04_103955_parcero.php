<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Parcero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parceros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_contacto')->nullable();
            $table->string('hora_contacto', 10)->nullable();
            $table->string('institucion', 50)->nullable();
            $table->string('servicio',10)->unsigned()->nullable();
            $table->foreign('servicio')->references('codigo')->on('tipos_datos');
            $table->string('forma_contacto',10)->unsigned()->nullable();
            $table->foreign('forma_contacto')->references('codigo')->on('tipos_datos');
            $table->string('nombres', 100)->nullable();
            $table->string('apellidos', 50)->nullable();
            $table->string('apodo', 50)->nullable();
            $table->integer('edad')->unsigned()->nullable();
            $table->string('genero', 1);
            $table->string('calle', 100)->nullable();
            $table->string('ciudad', 50)->nullable();
            $table->string('pais',10)->unsigned()->nullable();
            $table->foreign('pais')->references('codigo')->on('tipos_datos');
            $table->string('celular', 10)->nullable();
            $table->string('comentario', 250);
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
        Schema::dropIfExists('parceros');
    }
}
