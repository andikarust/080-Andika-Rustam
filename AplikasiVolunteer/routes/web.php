<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// auth

Route::controller(AuthController::class)->prefix("auth")->name("auth.")->group(function(){
    Route::get("/login", "loginPage")->name("loginPage");
    Route::get("/relregister", "showRelawanRegisterForm")->name("relregister");
    Route::get("/orgregister", "showOrganisasiRegisterForm")->name("orgregister");
    Route::get("/orgprofile", "editorganisasi")->name("editorganisasi");
    Route::get("/relprofile", "editrelawan")->name("editrelawan");
    
    Route::post("/login","login")->name("login");
    Route::post("/logout","logout")->name("logout");
    Route::post("/relregister", "registerRelawan")->name("relregister");
    Route::post("/orgregister", "registerOrganisasi")->name("orgregister");
    Route::post("/orgprofile", "updateorganisasi")->name("updateorganisasi");
    Route::post("/relprofile", "updaterelawan")->name("updaterelawan");
});

// landing


Route::get('/listaktivitas', function () {
    return view('listaktivitas');
})->name('listaktivitas');

// admin

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');

Route::get('/admin/jenisaktivitas', function () {
    return view('admin.jenisaktivitas');
})->name('admin.jenisaktivitas');

Route::get('/admin/listaktivitas', function () {
    return view('admin.listaktivitas');
})->name('admin.listaktivitas');

Route::get('/admin/organisasi', function () {
    return view('admin.organisasi');
})->name('admin.organisasi');

Route::get('/admin/relawan', function () {
    return view('admin.relawan');
})->name('admin.relawan');

// organisasi

// Route::get('/organisasi/aktivitas', function () {
//     return view('organisasi.aktivitas');
// })->name('organisasi.aktivitas');

Route::get('/organisasi/tambah', function () {
    return view('organisasi.tambah');
})->name('organisasi.tambah');

Route::get('/organisasi/edit', function () {
    return view('organisasi.edit');
})->name('organisasi.edit');

Route::get('/organisasi/hapus', function () {
    return view('organisasi.hapus');
})->name('organisasi.hapus');

// Route::get('/auth/profile', function () {
//     return view('auth.profile');
// })->name('auth.profile');

// relawan

Route::get('/relawan/profil', function () {
    return view('relawan.profil');
})->name('relawan.profil');

Route::get('/relawan/status', function () {
    return view('relawan.status');
})->name('relawan.status');

Route::resource('/organisasi/aktivitas', ActivityController::class);