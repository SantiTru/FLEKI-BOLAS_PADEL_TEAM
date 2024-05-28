<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void
    {
        Schema::create('labels', function (Blueprint $table) {
            Schema::dropIfExists('labels');
            $table->id();
            $table->string('nombre', 15);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('labels');
    }
};
