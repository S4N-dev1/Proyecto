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
route::resource('provedor',App\Http\Controllers\ProvedorController::class);
route::resource('cliente',App\Http\Controllers\ClienteController::class);
route::resource('empleado',App\Http\Controllers\EmpleadoController::class);
route::resource('producto',App\Http\Controllers\ProductoController::class);
route::resource('venta',App\Http\Controllers\VentaController::class);
route::resource('descuentosventa',App\Http\Controllers\DescuentosventaController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');
