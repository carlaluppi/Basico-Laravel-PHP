<?php

use App\Http\Controllers\CocheController;
use App\Http\Controllers\PropietarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::middleware('auth')->group

Route::controller(CocheController::class)->group(function (){
    Route::get('/coches', 'index');
    Route::post('/coche', 'store');
    Route::get('/coche/{id}', 'show');
    Route::put('/coche/{id}', 'update');
    Route::delete('/coche/{id}', 'destroy');
});

Route::controller(PropietarioController::class)->group(function (){
    Route::get('/propietarios', 'index');
    Route::post('/propietario', 'store');
    Route::get('/propietario/{id}', 'show');
    Route::put('/propietario/{id}', 'update');
    Route::delete('/propietario/{id}', 'destroy');
});