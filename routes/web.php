<?php

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

//Crear una nueva ruta

Route::get('/sobrenosotros', function () {
    return '<h1>Sobre nosotros</h1>';
});
Route::get('/contacto', function () {
    return '<h1>Contacto</h1>';
});
Route::get('/foro', function () {
    return '<h1>Foro</h1>';
});

Route::get('/post/{id}/{nombre}', function ($id,$nombre) {
    return '<h1>Este es el post de ' .$nombre.' es el número'. $id. ' del Foro</h1>';
})->where ('nombre','[a-zA-z]+');
