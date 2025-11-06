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
//Rutas segun roles
//Rutas para admins
Route::get('/admin', function () {  return view ('admin');})->middleware('auth:admin');

//termina ruta para admins
Route::get('/user', function () {  return view ('user');})->middleware('auth:user');

Route::get('/login', function () {return view('login');});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {return view('registro');});
Route::post('/register', [UsuarioController::class, 'register'])->name('register');


