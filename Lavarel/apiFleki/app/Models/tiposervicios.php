<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model {
    protected $fillable = ['name'];

    public function servicios() {
        return $this->hasMany(Servicio::class);
    }
}
