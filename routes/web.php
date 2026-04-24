<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Produkcontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/produk',function(){
//     return ("ini adalah halaman produk");

// });

route::get('/produk', [Produkcontroller::class,'index']);
route::get('/showproduk', [Produkcontroller::class,'show']);
route::get('/viewproduk', [Produkcontroller::class,'view']);