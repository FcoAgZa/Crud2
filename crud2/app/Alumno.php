<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $primaryKey = 'id_alumno';
    public $timestamps = false;
    protected $fillable = [
        'id_alumno', 'nombre', 'apellido_p', 'apellido_m', 'edad', 'correo', 'telefono', 'grupo'
    ];
}
