<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Servicios extends Model
{
    use HasFactory;
    protected $fillable = ["titulo", "descripcion"];
    protected $hidden = ["created_at", "updated_at"];
    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(
            Servicios::class,
            'tarea_etiqueta',
            'tarea_id',
            'etiqueta_id'
        );
    }
}
