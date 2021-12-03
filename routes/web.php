<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;

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
    return view('welcome');
});*/

/*
Route::get('/', function () {
    return view('juego.index');
});

Route::get('juego/create',[JuegoController::class,'create']);
*/
Route::resource('juego',JuegoController::class); // aqui accedo a todas las vistas

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


