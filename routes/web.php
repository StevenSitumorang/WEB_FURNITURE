<?php

use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//routes/web.php
Route::get('/welcome', function () {
    return view("welcome");
});

//routes/web.php
Route::get('/user/{id}', function ($id) {
    return 'User Degan ID ';
});

//routes/web.php
//Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//    return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

//routes/web.php
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', function () {
        return 'Admin Users';
    });
});

// Login Routes
Route::get('/login_furniture', [LoginController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
