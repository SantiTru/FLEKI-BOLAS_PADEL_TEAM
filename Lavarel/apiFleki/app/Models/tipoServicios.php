<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicios extends Model
{
    use HasFactory;

    protected $table = 'tipo_servicios';
    protected $primaryKey = 'id_tipo_servicios';

    protected $fillable = [
        'nombre_tipo',
        'descripcion_tipo',
        'precio',
    ];

    public function servicios()
    {
        return $this->hasMany(Servicios::class, 'id_tipo_servicios', 'id_tipo_servicios');
    }
}
