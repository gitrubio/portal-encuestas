<?php

use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\respuestasController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('form-encuesta.encuesta');
});
Route::get('/', function () {
    return view('dashboard.dashboard');
});
Route::get('', function () {
    return view('form-encuesta.principal');    
});
Route::get('/', function () {
    return view('form-encuesta.preguntas');
});

            /*Ruta utilizada para Recibir los datos del Formulario de encuesta 
            diligenciado por los usuarios*/
Route::post('respuestas', [respuestasController::class, 'store'])
            ->name('respuestas.store');
            
/*Route::get('/', function () {
Route::get('/', function () {
    return view('form-encuesta.queja');
    
});

    return view('encuesta.inicioqueja');
    
});*/