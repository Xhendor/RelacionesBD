<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre');
            $table->double('precio');
            $table->text('marca');
            /*Se tuvo que poner el mismo tipo de dato ya que no aceptaba el INT como naturalmente es una relacion de bd*/
            $table->bigInteger('fabricante')->unsigned();
            $table->bigInteger('departamento')->unsigned();
            $table->foreign('departamento')->references('id')->on('departamentos')->onDelete('cascade');
            $table->foreign('fabricante')->references('id')->on('fabricantes')->onDelete('cascade');

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
        Schema::dropIfExists('articulos');
    }
}
