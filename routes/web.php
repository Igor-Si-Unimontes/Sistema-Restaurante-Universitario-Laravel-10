<?php

use App\Http\Controllers\CadastrarUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/usuarios',[CadastrarUsuarioController::class , 'index'])->name('usuarios.index');
Route::post('/usuarios',[CadastrarUsuarioController::class , 'store'])->name('usuarios.store');
Route::get('/', function () {
    return view('welcome');
});
