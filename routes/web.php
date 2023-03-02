<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nuevavistaController;
use App\Http\Controllers\proveedorController;
use App\Http\Controllers\docenteController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\alumnoController;
use App\Http\Controllers\personalacademicoController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nueva-ruta',function(){
    return  " hola mundo";
});
//ruta para mostrar vista 
Route::view('/nueva-vista','nuevavista');

//ruta es spara enviar parametros por medio de las rutas
Route::view('/nueva-vista2','nuevavista',['nombre'=>'cosas de inges','valor'=>-1]);


//vista por medio de un controlador 
Route::get('/ruta-controlador',[nuevavistaController::class, 'index']);

// ruta para recibir un parametro en la url
Route::get('/nueva-vista', function (Request $request){
 return"hola ". $request->get('variable');
});
 // ruta es para  recibir parametros en la URL  poir medio del controlador 
 Route::get('/ruta-controlador/{id}', [nuevavistaController::class, 'recibirParametros'])->name('prueba');


 // grupo de rutas

 Route::prefix('ruta')->group(function(){
    Route::name('ruta.')->group(function(){
     Route::get('/users', function(){
         return view('nuevavista',['nombre'=>'Cosas de inges']);
     })->name('users');
     Route::get('/users/create',[nuevavistaController::class,'create'])->name('users.create');
     Route::get('/users/show',[nuevavistaController::class,'show'])->name('users.show');
     Route::get('/users/edit',[nuevavistaController::class,'edit'])->name('users.edit');
     Route::get('/users/delete',[nuevavistaController::class,'destroy'])->name('users.delete');
     });
    
    // Route::get('/users',[nuevavistaController::class,'index']);
     
 });

 Route::get('productos',[nuevavistaController::class, 'mostrarProductos'])->middleware('verificar_usuario');
 Route::get('no_admin', [nuevavistaController::class, 'noAdmin'])->name('no_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    route ::group(['middleware'=>['auth']], function(){
    route::resource('proveedores',ProveedorController::class);
    route::resource('alumnos',AlumnoController::class);
    route::resource('docentes',DocenteController::class);
    route::resource('clientes',ClienteController::class);
    route::resource('personal_academicos',PersonalAcademicoController::class);
});
