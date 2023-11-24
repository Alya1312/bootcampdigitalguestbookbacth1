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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rute untuk menampilkan daftar pengguna
Route::get('/users', [UserController::class, 'index']);

// Rute untuk menampilkan formulir pembuatan pengguna
Route::get('/users/create', [UserController::class, 'create']);

// Rute untuk menyimpan pengguna baru
Route::post('/users', [UserController::class, 'store']);

// Rute untuk menampilkan detail pengguna
Route::get('/users/{id}', [UserController::class, 'show']);

// Rute untuk menampilkan formulir pengeditan pengguna
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

// Rute untuk memperbarui informasi pengguna
Route::put('/users/{id}', [UserController::class, 'update']);

// Rute untuk menghapus pengguna
Route::delete('/users/{id}', [UserController::class,'destroy']);
