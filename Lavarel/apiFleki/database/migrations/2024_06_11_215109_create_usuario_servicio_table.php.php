<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario_servicio', function (Blueprint $table) {
            $table->id('id_usuario_servicio');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_servicios');
            $table->date('fecha_contratacion');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_usuario')->references('id')->on('User')->onDelete('cascade');
            $table->foreign('id_servicios')->references('id_servicios')->on('servicios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_servicio');
    }
};
