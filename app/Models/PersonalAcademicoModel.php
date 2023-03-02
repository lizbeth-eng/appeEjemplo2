<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalAcademicoModel extends Model
{
    use HasFactory;
    protected $primaryKey='idPersonalAcademico';
    protected $table='personal_academicos';
    protected $fillable=[
           'nombre',
           'apellidoPaterno',
           'apellidoMaterno',
           'idCargoAcademico',
           'idDepartamento',
    ];
    public function cargo_academico(){
        return $this->belongsTo('App\Models\PersonalAcademicoModel','idCargoAcademico', 'idCargoAcademico');
        
}
public function departamento(){
    return $this->belongsTo('App\Models\DepartamentoModel','idDepartamento', 'idDepartamento');
}
}