<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id_libro');
            $table->string('nombre',60);
            $table->string('editorial',45);
            $table->string('autor',25);
            $table->string('genero',25);
            $table->integer('numero_de_paginas');
            $table->date('año_de_edicion');
            $table->integer('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
