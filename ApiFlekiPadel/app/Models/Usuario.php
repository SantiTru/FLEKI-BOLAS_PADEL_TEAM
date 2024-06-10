<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Usuario';
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

    public function setPasswordAttribute($password)
    {
        $this->attributes['contraseña'] = bcrypt($password);
    }

    public function usuarioServicios()
    {
        return $this->hasMany(UsuarioServicio::class, 'id_usuario');
    }
}