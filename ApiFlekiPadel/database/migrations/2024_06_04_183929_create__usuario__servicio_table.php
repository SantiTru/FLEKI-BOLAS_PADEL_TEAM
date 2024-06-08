<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioServicioTable extends Migration
{
    public function up()
    {
        Schema::create('usuario_servicio', function (Blueprint $table) {
            $table->id('id_usuario_servicio');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_servicio');
            $table->date('fecha_contratacion');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario')->onDelete('cascade');
            $table->foreign('id_servicio')->references('id_servicio')->on('servicio')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario_servicio');
    }
}