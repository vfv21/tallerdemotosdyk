<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CitaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/', 'welcome')->name('inicio');
Route::resource('/servicios',ServicioController::class); //Crea 7 rutas para el CRUD de servicios
Route::resource('/citas',CitaController::class); //Crea 7 rutas para el CRUD de citas




