<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LibroController;

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
/*
Route::get('/', function () {
    return view('libro.index');
});*/

Auth::routes();

Route::get('libros/pdf',[LibroController::class,'pdf'])->name('libros.pdf')->middleware('auth');

Route::resource('libros',LibroController::class)->middleware('auth');
Route::resource('categorias',CategoriaController::class)->middleware('auth');

Route::get('/home', [LibroController::class, 'index'])->name('home');