<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});


use App\Models\Producto;

Route::get('ABPLANDING', function () {
    $productos = Producto::latest()->take(6)->get();
    return view('ABPLANDING', compact('productos'));
});

Route::get('contacto.index', function () {
    return view('contacto.index');
});







Auth::routes();
route::resource('persona',App\Http\Controllers\PersonaController::class);
route::resource('metodospago',App\Http\Controllers\MetodosPagoController::class);
route::resource('descuento',App\Http\Controllers\DescuentoController::class);
route::resource('provedor',App\Http\Controllers\ProvedorController::class);
route::resource('cliente',App\Http\Controllers\ClienteController::class);
route::resource('empleado',App\Http\Controllers\EmpleadoController::class);
route::resource('producto',App\Http\Controllers\ProductoController::class);
route::resource('productViewer',App\Http\Controllers\ProductViewerController::class);
Route::resource('venta', App\Http\Controllers\VentaController::class)
    ->parameters(['venta' => 'venta']);

route::resource('descuentosventa',App\Http\Controllers\DescuentosventaController::class)
->parameters(['descuentosventa' => 'descuentosventa']);

Route::get('abpdash', [App\Http\Controllers\AbpdashController::class, 'index'])->name('abpdash.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');
