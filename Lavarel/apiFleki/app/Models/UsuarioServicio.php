<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioServicio extends Model
{
    use HasFactory;

    protected $table = 'usuario_servicio';

    protected $fillable = [
        'id_usuario',
        'id_servicios',
        'fecha_contratacion',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function servicios()
    {
        return $this->belongsTo(Servicios::class, 'id_servicios');
    }
}
