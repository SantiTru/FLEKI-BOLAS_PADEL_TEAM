<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->id('id_servicio');
            $table->date('fecha_evento');
            $table->unsignedBigInteger('id_tipo_servicio')->nullable();
            $table->foreign('id_tipo_servicio')->references('id_tipo_servicio')->on('tipo_servicio');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('servicio');
    }
};