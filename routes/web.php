<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

// Route::resource () : get, post, update, delete;
Route::resource('latihan', \App\Http\Controllers\LatihanController::class);
Route::get('penjumlahan', [\App\Http\Controllers\LatihanController::class, 'penjumlahan'])->name('penjumlahan');
Route::get('pengurangan', [\App\Http\Controllers\LatihanController::class, 'pengurangan'])->name('pengurangan');
Route::get('pembagian', [\App\Http\Controllers\LatihanController::class, 'pembagian'])->name('pembagian');
Route::get('perkalian', [\App\Http\Controllers\LatihanController::class, 'perkalian'])->name('perkalian');
Route::post('store_perkalian', [\App\Http\Controllers\LatihanController::class, 'storePerkalian'])->name('store_perkalian');
Route::post('store_pembagian', [\App\Http\Controllers\LatihanController::class, 'storePembagian'])->name('store_pembagian');
Route::post('store_pengurangan', [\App\Http\Controllers\LatihanController::class, 'storePengurangan'])->name('store_pengurangan');
Route::post('store_penjumlahan', [\App\Http\Controllers\LatihanController::class, 'storePenjumlahan'])->name('store_penjumlahan');

Route::resource('home', \App\Http\Controllers\HomeController::class);

// halaman admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name("login");
    Route::post('/', [\App\Http\Controllers\LoginController::class, 'loginpost'])->name("login.post");

    Route::middleware('auth')->group(function () {
        Route::resource('dashboard', \App\Http\Controllers\DashboardController::class)->names(["index", "dashboard.index"]);
        Route::resource('user', \App\Http\Controllers\UserController::class);
        Route::resource('profile', \App\Http\Controllers\ProfileController::class);
        Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
        Route::resource('pendidikan', \App\Http\Controllers\PendidikanController::class);
        Route::resource('setting', \App\Http\Controllers\SettingController::class);

        Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name("logout");
    });
});
