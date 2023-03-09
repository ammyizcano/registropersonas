<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\LoginController;

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
    return view('persona.create');
});

Route::resource('/personas', 'App\Http\Controllers\PersonaController');
Route::get('personas-lista-excel', [PersonaController::class, 'exportExcel'])->name('personas.excel');
Route::view('/', 'persona.create')->name('persona.index');

 // Route::view('/persona.detalle', function () {
//     return view('persona.detalle');
    
 // })->name('persona.detalle');

 Route::get('/persona.detalle',[PersonaController::class, 'index'])->name('persona.detalle')->middleware('auth.admin');
 Route::post('/validar-login',[LoginController::class, 'login'])->name('ingresar');

 Route::view('/login', "persona.login")->name('login');
 
 Route::get('/cerrar-sesion',[LoginController::class, 'logout'])->name('cerrarsesion');