<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $primaryKey = 'id_grupo';
    public $timestamps = false;

    protected $fillable = [
        'id_grupo', 'grupo', 'semestre', 'turno'
    ];

    public function getgrupo()
    {
        return $this->belongsTo('Alumno');
    }
}
