<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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

    protected $hidden = [
        'Contraseña',
    ];

    public function usuarioServicios()
    {
        return $this->hasMany(UsuarioServicio::class, 'Id_usuario');
    }
}