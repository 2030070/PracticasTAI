<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

//Metodo para llamar el controlador del dashboard
Route::get('/',[Dashboard::class,'principal']);


Route::get('/alumnos', function () {
    return view('alumnos');
});

Route::get('/curriculum', function () {
    return view('curriculum');
});

//Metodo para llamar el controlador de crar usuarios
Route::get('/crearCuenta',[RegisterController::class,'index']);