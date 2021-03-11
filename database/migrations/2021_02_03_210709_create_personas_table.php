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
            $table->unsignedBigInteger('dni')->unique()->primary();
            // -------
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->integer('edad');
            $table->char('sexo',1);
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            // ------
            // $table->unsignedBigInteger('direccion_id');
            // $table->foreign('direccion_id')->references('id')->on('direccions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('domicilio');
            // ------
            $table->string('cargo')->nullable();
            $table->float('sueldo')->nullable();
            $table->tinyInteger('tipo_A')->default(0);
            $table->tinyInteger('tipo_E')->default(0);
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
