<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
     use HasFactory;
     protected $primaryKey='idAlumno';
     protected $foreingKey='idModalidad';
     protected $table='alumnos';
     protected $fillable=[
        'nombre',
       'apellidoPaterno',
       'apellidoMaterno',
       'numeroControl',
        'idModalidad',
      ];
         public function modalidad(){
           return $this->belongsTo('App\Models\ModlidadModel','idModalidad', 'idModalidad');
}
}