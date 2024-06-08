<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioServicio extends Model
{
    use HasFactory;

    protected $table = 'usuario_servicio';
    protected $primaryKey = 'id_usuario_servicio';
    protected $fillable = [
        'id_usuario',
        'id_servicio',
        'fecha_contratacion',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }
}
