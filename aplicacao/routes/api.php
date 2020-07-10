<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/curso','CursoController@create');
Route::middleware('auth:sanctum')->post('/disciplina','DisciplinaController@create');
Route::middleware('auth:sanctum')->post('/questao','QuestaoController@create');

Route::middleware('auth:sanctum')->get('/curso','CursoController@read');
Route::middleware('auth:sanctum')->get('/disciplina','DisciplinaController@read');
Route::middleware('auth:sanctum')->get('/questao','QuestaoController@read');

Route::middleware('auth:sanctum')->delete('/curso/{id}', 'CursoController@delete');
Route::middleware('auth:sanctum')->delete('/disciplina/{id}', 'DisciplinaController@delete');
Route::middleware('auth:sanctum')->delete('/questao/{id}', 'QuestaoController@delete');

Route::middleware('auth:sanctum')->put('/curso/{id}', 'CursoController@update');
Route::middleware('auth:sanctum')->put('/disciplina/{id}', 'DisciplinaController@update');
Route::middleware('auth:sanctum')->put('/questao/{id}', 'QuestaoController@update');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login','UserController@login');

