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

// Route::get('/', function () {
//     // return view('welcome');
//     return "Hola bienvenido a la aplicacion";
// });
// Route::get("contacto", function(){
// 	return "Bienvenido a mi contacto";
// });
// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();

//pasar parametros
// Route::get("saludo/{nombre?}", function($nombre = "Invitado"){
// 	return "Saludos ".$nombre;
// });
// // routas con nombre
// Route::get("contactame", function(){
// 	return "Seccion de contactos";
// })->name('contactos');
//Retornar vista e información.
// Route::get("/", function(){
// 	$nombre = "Jorge";
// 	//Primera forma
// 	// return view('home')->with(['nombre'=> $nombre]);
// 	//Segunda Forma
// 	// return view('home', ['nombre'=> $nombre]);
// 	//Tercera Forma
// 	return view('home', compact('nombre'));
// })->name("home");
Route::view("/", "home")->name("home");
Route::view("about", "about")->name("about");
Route::view("portafolio", "portafolio")->name("portafolio");
Route::view("contact", "contact")->name("contact");
