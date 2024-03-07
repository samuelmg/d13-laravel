<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\SitioController;
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

Route::get('/informacion/{tipo?}', [SitioController::class, 'info']);
// Route::get('/contacto', [ComentarioController::class, 'create']);
// Route::post('/contacto', [ComentarioController::class, 'store']);
Route::resource('comentario', ComentarioController::class);
    //->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/x/y/demo', function () {
    return view('landing');
})->name('landing');
