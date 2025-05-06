<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Models\Persona;
use App\Models\Estudiante;
use App\Models\Docente;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/personas', function () {
    $personas = [
        new Persona('Carlos', 45, 'Docente'),
        new Persona('Luis', 22, 'Estudiante'),
        new Persona('Mariana', 35, 'Coordinador')
    ];
    return view('personas', compact('personas'));
});

Route::get('/productos', [ProductoController::class,'index'])->name ('productos.index');



Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');

Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');

