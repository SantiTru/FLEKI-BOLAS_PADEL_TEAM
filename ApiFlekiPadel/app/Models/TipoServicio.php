<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    use HasFactory;

    protected $table = 'tipo_servicio';
    protected $primaryKey = 'id_tipo_servicio';

    protected $fillable = [
        'nombre_tipo',
        'descripcion_tipo',
        'precio',
    ];

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'id_tipo_servicio');
    }

    public function usuarioServicios()
    {
        return $this->hasManyThrough(UsuarioServicio::class, Servicio::class, 'id_tipo_servicio', 'id_servicio');
    }
}