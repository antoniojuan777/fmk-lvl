<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->id();
            $table->boolean('nunca_empleado')->default(false);
            $table->boolean('sin_empleo')->default(false);
            $table->string('empleo',10)->unsigned()->nullable();
            $table->foreign('empleo')->references('codigo')->on('tipos_datos');
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
        Schema::dropIfExists('empleos');
    }
}
