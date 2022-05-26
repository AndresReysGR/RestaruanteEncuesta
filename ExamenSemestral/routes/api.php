<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\EncuestasController as APIEncuestasController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::post('/encuestas', [APIEncuestasController::class, 'store'])->name('api.encuestas.store');