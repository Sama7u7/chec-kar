<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});
Route::get('/test', function () {
    return view('testview');
});
//Rutas segun roles
//Rutas para admins
Route::get('/admin', function () {  return view ('admin');})->middleware('auth:admin')->name('admin');
Route::get('/admin/scan', function () {return view('product');})->name('products.create');
Route::post('/admin/scan', [ProductController::class, 'storeProducts'])->name('products.store');

//termina rutas para admins
Route::get('/user', function () {  return view ('user');})->middleware('auth:user');

Route::get('/login', function () {return view('login');});
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {return view('register');});
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
