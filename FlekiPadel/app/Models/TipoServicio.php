<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    use HasFactory;

    protected $table = 'tipo_servicio';
    protected $primaryKey = 'Id_tipo_servicio';

    protected $fillable = [
        'Nombre_tipo',
        'Descripción_tipo',
        'Precio',
    ];

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'Id_tipo_servicio');
    }
}
