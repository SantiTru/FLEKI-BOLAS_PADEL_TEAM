<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $table = 'servicios';

    protected $fillable = [
        'fecha_evento',
        'id_tipo_servicios',
    ];

    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicios::class, 'id_tipo_servicios', 'id_tipo_servicios');
    }

    public function usuarios()
    {
        return $this->hasMany(UsuarioServicio::class, 'id_servicios');
    }
}
