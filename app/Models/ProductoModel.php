<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    use HasFactory;
    protected $primarykey='idProducto';
    protected $foreignkey='idProveedor';
    protected $table='productos';
    protected $fillable =[
        'nombre', 
            'descrpcion',
            'precio',
            'expiracion',
            'stock',
            'idProveedor',
    ];
    public function proveedor (){
        return $this->belongsTo('App\Models\ProveedorModel','idProveedor',);
    }
    
}

