<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenamientoHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenamiento_horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_dni');
            $table->unsignedBigInteger('disciplina_id');
            $table->unsignedBigInteger('horario_id');
            $table->foreign('persona_dni')->references('dni')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cupos');
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
        Schema::dropIfExists('entrenamiento_horarios');
    }
}
