<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TipoServicioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioServicioController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('tipo-servicios', TipoServicioController::class);
Route::resource('servicios', ServicioController::class);
Route::resource('usuario-servicios', UsuarioServicioController::class);
