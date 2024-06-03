<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFechaContratacionColumnInUsuarioServicioTable extends Migration
{
    public function up()
    {
        Schema::table('usuario_servicio', function (Blueprint $table) {
            $table->renameColumn('Fecha_contratación', 'Fecha_contratacion');
        });
    }

    public function down()
    {
        Schema::table('usuario_servicio', function (Blueprint $table) {
            $table->renameColumn('Fecha_contratacion', 'Fecha_contratación');
        });
    }
}
