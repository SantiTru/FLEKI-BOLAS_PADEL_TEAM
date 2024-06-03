<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'Id_usuario';

    protected $fillable = [
        'Nombre_usuario',
        'Apellidos',
        'Mail',
        'Contraseña',
    ];

    public function usuarioServicios()
    {
        return $this->hasMany(UsuarioServicio::class, 'Id_usuario');
    }
}