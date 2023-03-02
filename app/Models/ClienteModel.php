<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;
    protected $primarykey='idCliente';
    protected $foreignkey='idProducto';
    protected $table='clientes';
    protected $fillable =  [
            'nombre',
            'apellidoPaterno',
            'apellidoMaterno',
            'rfc',
            'telefono',
            'correo',
            'dirrecion',
            'idProducto',
    ];

    public function producto(){
        return $this->bolongsTo('App\Models\ProductoModel','idProducto', 'idProducto');
    }
}
