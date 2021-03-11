<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReciboMembresiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo_membresia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recibo_id');
            $table->unsignedBigInteger('membresia_id');
            $table->foreign('recibo_id')->references('id')->on('recibos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('membresia_id')->references('id')->on('membresias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('recibo_membresia');
    }
}
