<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cvu', function () {
    return view('cvu');
});
Route::get('borrego', function () {
    return view('borrego');
});
Route::get('segundaPagina', function () {
    return view('segundaPagina');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('ejemplo1', function () {
    return view('ejemplo1');
});
Route::get('ejemplo2', function () {
    return view('ejemplo2');
});
Route::get('ejemplo3', function () {
    return view('ejemplo3');
});
Route::get('ABPDASH', function () {
    return view('ABPDASH');
});
Route::get('ABPLANDING', function () {
    return view('ABPLANDING');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
