<?php

use Illuminate\Support\Facades\Route;

// web.php
Route::middleware('auth')->group(function () {
    Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
    Route::post('/servicios/enroll/{id}', [ServicioController::class, 'enroll'])->name('servicios.enroll');
    Route::get('/mis-servicios', [ServicioController::class, 'myServices'])->name('servicios.my_services');
});
