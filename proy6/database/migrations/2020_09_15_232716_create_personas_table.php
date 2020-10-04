<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fechaNac');
            $table->integer('edad');
            $table->string('cedula');
            $table->string('nombresMama');
            $table->string('nombresPapa');
            $table->boolean('estudiando');
            $table->string('nombreEscuela');
            $table->string('direccion');
            $table->binary('imagen');
            $table->string('estado')->default('ACTIVE');
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
        Schema::dropIfExists('personas');
    }
}
