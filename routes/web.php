<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});

Route::get('ABPDASH', function () {
    return view('ABPDASH');
});
Route::get('ABPLANDING', function () {
    return view('ABPLANDING');
});





Auth::routes();
route::resource('persona',App\Http\Controllers\PersonaController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');
