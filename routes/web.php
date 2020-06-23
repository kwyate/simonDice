<?php

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

Route::get("/", "PuntajeController@index")->name("puntaje.index");
Route::post("/", "PuntajeController@store")->name("puntaje.store");
Route::get("/comenzarJuego/{id}", "UsuarioController@show")->name("user.show");
Auth::routes();
Route::get('/home/{id}', 'HomeController@show')->name('home.show');
