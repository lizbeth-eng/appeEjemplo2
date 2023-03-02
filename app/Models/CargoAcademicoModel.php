<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoAcademicoModel extends Model
{
    use HasFactory;
    protected $primaryKey='idCargoAcademico';
    protected $table='cargo_Academicos';
    protected $fillable=[
           'nombre',
           
          
    ];
    

}

