<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class TipoServicios extends Model
{
    use HasFactory;
    protected $fillable = ["nombre"];
    protected $hidden = ["created_at", "updated_at"];
    public function task(): BelongsToMany
    {
        return $this->belongsToMany(
            tipoServicios::class,
            'tarea_etiqueta',
            'etiqueta_id',
            'tarea_id'
        );
    }
};
