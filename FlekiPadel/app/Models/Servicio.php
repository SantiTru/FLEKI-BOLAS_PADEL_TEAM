<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicio';
    protected $primaryKey = 'Id_servicio';

    protected $fillable = [
        'Fecha_evento',
        'Id_tipo_servicio',
    ];

    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicio::class, 'Id_tipo_servicio', 'Id_tipo_servicio');
    }
}
