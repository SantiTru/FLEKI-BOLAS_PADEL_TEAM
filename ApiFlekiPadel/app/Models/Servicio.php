<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicio';

    protected $primaryKey = 'id_servicio';

    protected $fillable = [
        'fecha_evento',
        'id_tipo_servicio',
    ];


    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicio::class, 'id_tipo_servicio');
    }

    public function usuarioServicios()
    {
        return $this->hasMany(UsuarioServicio::class, 'id_servicio');
    }
}
