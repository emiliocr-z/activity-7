<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'email', 'tipo_usuario'];

    // Relación uno a muchos con Grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
