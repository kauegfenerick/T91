<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('usuario')
->middleware(['auth'])
->controller(UsuarioController::class)
->group(function () {
    Route::get('/' , 'index')->name('usuario.index');
    Route::get('/novo', 'create')->name('usuario.create');
    Route::get('/editar/{id}', 'edit')->name('usuario.edit');
    Route::get('/mostrar/{id}', 'show')->name('usuario.show');
    Route::post('/cadastrar', 'store')->name('usuario.store');
    Route::post('/atualizar/{id}', 'update')->name('usuario.update');
    Route::post('/deletar/{id}', 'destroy')->name('usuario.destroy');

});

require __DIR__.'/auth.php';
