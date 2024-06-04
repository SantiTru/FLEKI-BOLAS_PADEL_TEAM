<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        return $this->belongsTo(Usuario::class, 'Id_usuario');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'Id_servicio');
    }
}
