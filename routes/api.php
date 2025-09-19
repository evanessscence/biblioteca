<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('libros', App\Http\Controllers\LibroController::class);
Route::apiResource('prestamos', App\Http\Controllers\PrestamoController::class);