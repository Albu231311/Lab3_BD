<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'creditos'];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'curso_estudiantes');
    }
}
