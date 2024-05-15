<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');

Route::get('/admin/acara', function () {
    return view('admin.acara');
})->name('admin.acara');

Route::get('/admin/tambah', function () {
    return view('admin.tambah');
})->name('admin.tambah');