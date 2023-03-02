<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalidadModel extends Model
{
    use HasFactory;
    protected $primarykey ='idModalidad';
    protected $table ='modalidades';
    protected $fillable=['tipoModalidad',
    ];
}
