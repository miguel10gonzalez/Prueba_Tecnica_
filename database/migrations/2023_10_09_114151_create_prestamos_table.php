<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->integer('id_libro')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->dateTime('fecha_de_salida')->default(date("Y-m-d H:i:s"));
            $table->dateTime('fecha_max_devolucion');
            $table->dateTime('fecha_devolucion');
            $table->foreign('id_libro')->references('id_libro')->on('libros');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
