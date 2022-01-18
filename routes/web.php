<?php

use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\respuestasController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\AlertController;

use App\Http\Controllers\PrincipalController;

use App\Models\Paciente;



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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('/', function () {
    return view('form-encuesta.encuesta');
});
<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('users.dashboard');
});*/

/*Route::get('/', function () {
    return view('dashboard.dashboard');
});*/








/*Route::get('/pregunta', function () {
    return view('form-encuesta.preguntas');//ruta para vista de la encuesta
});*/
Route::get('/', function () { //ruta para vista principal.(ingreso del usuario)
    return view('form-encuesta.principal');
});


//Route::get('/encuesta',[EncuestaController::class,'index'])->name('preguntas.index');//llamando controlador de preguntas
//Route::get('/',[PrincipalController::class,'index'])->name('prin.index');//llamando controlador principal
         
Route::post('respuestas', [respuestasController::class, 'store'])
->name('respuestas.store');
   /*Ruta utilizada para Recibir los datos del Formulario de encuesta 
            diligenciado por los usuarios*/
//Route::resource('principal',PrincipalController::class);
Route::post('encuesta', [PrincipalController::class, 'index'])
->name('principal.index');
   
        /*  Route::get('/', function () {
                return view('form-encuesta.queja');
          });*/
/*Route::get('/', function () {

    return view('encuesta.inicioqueja');
});*/

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

