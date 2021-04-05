<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AsignacionParcero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones_parceros', function (Blueprint $table) {
            $table->id();
            $table->integer('asignacion_id')->unsigned();
            $table->foreign('asignacion_id')->references('id')->on('asignaciones');
            $table->integer('parcero_id')->unsigned();
            $table->foreign('parcero_id')->references('id')->on('parceros');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('actual');
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
        Schema::dropIfExists('asignaciones_parceros');
    }
}
