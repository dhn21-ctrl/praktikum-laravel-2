<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Produkcontroller;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AnggotaController;



Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/produk',function(){
//     return ("ini adalah halaman produk");

// });

route::get('/produk', [Produkcontroller::class,'index']);
route::get('/showproduk', [Produkcontroller::class,'show']);
route::get('/viewproduk', [Produkcontroller::class,'view']);
route::get('/mahasiswa', [MahasiswaController::class,'index']);

Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);


use App\Http\Controllers\BukuController;

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/store', [BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::post('/buku/update/{id}', [BukuController::class, 'update']);
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy']);

Route::resource('anggota', AnggotaController::class);