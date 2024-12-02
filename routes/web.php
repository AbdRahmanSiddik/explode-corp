<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/produk', function () {
    return view('admin.produk.produk-list');
});
