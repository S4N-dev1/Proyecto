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
route::resource('metodospago',App\Http\Controllers\MetodosPagoController::class);
route::resource('descuento',App\Http\Controllers\DescuentoController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');
