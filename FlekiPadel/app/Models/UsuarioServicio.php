<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioServicio extends Model
{
    use HasFactory;

    protected $table = 'usuario_servicio';
    protected $primaryKey = 'Id_usuario_servicio';

    protected $fillable = [
        'Id_usuario',
        'Id_servicio',
        'Fecha_contratación',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Id_usuario', 'Id_usuario');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'Id_servicio', 'Id_servicio');
    }
}
