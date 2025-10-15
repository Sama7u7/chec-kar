<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('testview');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login', function () {return view('login');});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {return view('registro');});
Route::post('/register', [UsuarioController::class, 'register'])->name('register');


