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

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nombre_usuario',
        'apellidos',
        'mail',
        'contraseña',
    ];

    protected $hidden = [
        'contraseña',
    ];


    public function usuarioServicios()
    {
        return $this->hasMany(UsuarioServicio::class, 'id_usuario');
    }
}