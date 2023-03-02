<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentoModel extends Model
{
    use HasFactory;
    protected $primaryKey='idDepartamento';
    protected $table='departamentos';
    protected $fillable=[
           'nombre',];
}
