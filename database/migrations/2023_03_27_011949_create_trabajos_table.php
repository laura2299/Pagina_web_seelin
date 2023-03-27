<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('actividad');
            $table->dateTime('fecha_inicio')->nullable();
            $table->string('categoria');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_cliente')->nullable();

            $table->foreign('id_cliente')
            ->references('id')
            ->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajos');
    }
};
