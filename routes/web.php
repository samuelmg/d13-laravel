<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informacion/{tipo?}', function($tipo = null) {

    return view('info', compact('tipo'));
    // return view('info', ['tipo' => $tipo]);
    // return view('info')->with('tipo', $tipo);
});

Route::get('/contacto', function() {
    return view('contacto');
});

Route::post('/contacto', function(Request $request) {
    dd($request->all(), $request->nombre, $request->input('nombre'));
    $nombre = $request->nombre;
    
    // Validar datos

    // Guardar datos

    // Redireccionar
});