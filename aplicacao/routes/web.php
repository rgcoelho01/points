<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');


//Auth::routes();

Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::middleware('auth:sanctum')->get('/home','HomeController@index')->name('home');
Route::middleware('auth:sanctum')->get('/ganhe','GanheController@index')->name('ganhe');
Route::middleware('auth:sanctum')->get('/perfil','PerfilController@index')->name('perfil');
Route::middleware('auth:sanctum')->get('/mensagens','MensagemController@index')->name('mensagens');
Route::middleware('auth:sanctum')->post('/ganhe/{id}', 'GanheController@update');
Route::middleware('auth:sanctum')->post('/perfil/{id}','PerfilController@update');
Route::middleware('auth:sanctum')->post('/mensagens','MensagemController@delete');
Route::middleware('auth:sanctum')->get('/cursos/read','CursoController@read');

Route::middleware('auth:sanctum')->get('/duvidas', function () {
    return view('duvidas');
})->name('duvidas');
Route::middleware('auth:sanctum')->get('/contato', function () {
    return view('contato');
})->name('contato');
Route::middleware('auth:sanctum')->post('/contato','ContatoController@index');

//Route::middleware('auth:sanctum')->get('administrador','AdministradorController@index')->name('administrador');
Route::middleware('role:administrador','auth:sanctum')->get('/administrador','AdministradorController@index')->name('administrador');