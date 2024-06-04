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
            $table->id('Id_usuario_servicio');
            $table->unsignedBigInteger('Id_usuario');
            $table->unsignedBigInteger('Id_servicio');
            $table->date('Fecha_contratacion');
            $table->timestamps();
            
            // Foreign key constraints
            $table->foreign('Id_usuario')->references('Id_usuario')->on('usuario')->onDelete('cascade');
            $table->foreign('Id_servicio')->references('Id_servicio')->on('servicio')->onDelete('cascade');
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

