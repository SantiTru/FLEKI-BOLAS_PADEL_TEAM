<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LabelsController;
use App\Http\Controllers\tipoServiciosController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/labels', [tipoServiciosController::class, 'store']);




Route::middleware('auth:sanctum')->group(function () {
    Route::resource('tasks', ServiciosController::class);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::resource('labels', tipoServiciosController::class);
});

