<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;

Route::get('/etudiants', [EtudiantController::class, 'index']);
Route::post('/etudiants/save', [EtudiantController::class, 'store']);
Route::put('/etudiants/update/{id}', [EtudiantController::class, 'update']);
Route::delete('/etudiants/delete/{id}', [EtudiantController::class, 'destroy']);

Route::get('/filieres', [FiliereController::class, 'index']);
Route::post('/filieres/save', [FiliereController::class, 'store']);
Route::put('/filieres/update/{id}', [FiliereController::class, 'update']);
Route::delete('/filieres/delete/{id}', [FiliereController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
