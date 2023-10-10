<?php

use App\Http\Controllers\PrestamoController;
use Illuminate\Support\Facades\Route;
use \Http\Controller\bibliotecaController;


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

Route::get('/Biblioteca', function () {
    return view('admin.usuario');
});

Route::get('/Bilioteca',  [bibliotecaController::class, 'store'])->name ('usuario');

Route::post('/Bilioteca/{id_usuario}',  [bibliotecaController::class, 'store'])->name ('usuario-edit');
Route::patch('/Bilioteca/{id_usuario}',  [bibliotecaController::class, 'update'])->name ('usuario-update');
Route::post('/Bilioteca/{id_usuario}',  [bibliotecaController::class, 'destroy'])->name ('usuario-destroy');


Route::post('/Bilioteca/{id_libros}',  [LibrosController::class, 'store'])->name ('libro-edit');
Route::patch('/Bilioteca/{id_libros}',  [LibrosController::class, 'update'])->name ('libro-update');
Route::post('/Bilioteca/{id_libros}',  [LibrosController::class, 'destroy'])->name ('libro-destroy');

Route::resource('prestamo', PrestamoController::class);
