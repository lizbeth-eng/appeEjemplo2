<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ProveedorModel;
use App\Models\ProductoModel;
use App\Models\ClienteModel;
use App\Models\DocenteModel;
use App\Models\AlumnoModel;
use App\Models\ModalidadModel;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    User::factory(5)->create();
    ProveedorModel::factory(20)->create();
    ProductoModel::factory(20)->create();
    AlumnoModel::factory(20)->create(); 
    ModalidadModel::factory(20)->create();
        
    }
}
