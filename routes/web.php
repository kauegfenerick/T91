<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::prefix('user')
->middleware(['auth'])
->controller(UserController::class)
->group(function () {
    Route::get('/' , 'index')->name('user.index');
    Route::get('/novo', 'create')->name('user.create');
    Route::get('/editar/{id}', 'edit')->name('user.edit');
    Route::get('/mostrar/{id}', 'show')->name('user.show');
    Route::post('/cadastrar', 'store')->name('user.store');
    Route::post('/atualizar/{id}', 'update')->name('user.update');
    Route::get('/deletar/{id}', 'destroy')->name('user.destroy');

});

require __DIR__.'/auth.php';
