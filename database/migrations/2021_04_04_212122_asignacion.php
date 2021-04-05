<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asignacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_admin')->unsigned()->nullable();
            $table->foreign('user_id_admin')->references('id')->on('users');
            $table->integer('user_id_origen')->unsigned()->nullable();
            $table->foreign('user_id_origen')->references('id')->on('users');
            $table->integer('user_id_destino')->unsigned();
            $table->foreign('user_id_destino')->references('id')->on('users');
            $table->string('tipo_asignacion',10)->unsigned();
            $table->foreign('tipo_asignacion')->references('codigo')->on('tipos_datos');
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
        Schema::dropIfExists('asignaciones');
    }
}
