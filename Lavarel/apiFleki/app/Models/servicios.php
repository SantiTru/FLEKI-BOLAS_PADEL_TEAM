<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {
    protected $fillable = ['name', 'description', 'tipo_servicio_id'];

    public function tipoServicio() {
        return $this->belongsTo(tiposervicio::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_services');
    }
}