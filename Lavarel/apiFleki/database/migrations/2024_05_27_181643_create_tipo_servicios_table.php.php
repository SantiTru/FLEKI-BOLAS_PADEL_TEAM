<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void
    {
        Schema::create('tipo_servicios', function (Blueprint $table) {
            $table->id('id_tipo_servicios');
            $table->string('nombre_tipo');
            $table->text('descripcion_tipo')->nullable();
            $table->decimal('precio', 10, 2);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tipo_servicios');
    }
};
