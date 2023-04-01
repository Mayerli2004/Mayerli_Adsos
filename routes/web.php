<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->middleware('can:home')->name('home');

Route::get('/Invitado', [App\Http\Controllers\HomeController::class, 'Invit'])->middleware('can:Invitado')->name('Invitado');
Route::get('/Administrador', [App\Http\Controllers\HomeController::class, 'Admin'])->middleware('can:Administrador')->name('Administrador');
