<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Produkcontroller;
use App\Http\Controllers\MahasiswaController;


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