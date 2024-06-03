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
        Schema::create('servicio', function (Blueprint $table) {
            $table->id('Id_servicio');
            $table->date('Fecha_evento');
            $table->unsignedBigInteger('Id_tipo_servicio')->nullable();
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('Id_tipo_servicio')->references('Id_tipo_servicio')->on('tipo_servicio')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio');
    }
};