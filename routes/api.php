<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//reference
Route::get('/References',[ReferenceController::class,'index']);

Route::post('/Reference',[ReferenceController::class,'store']);

Route::get('/References/{id}',[ReferenceController::class,'show']);

Route::put('/References/{id}',[ReferenceController::class,'update']);

Route::delete('/References/{id}',[ReferenceController::class,'destroy']);

//avis
Route::get('/Avis',[AvisController::class,'index']);

Route::post('/Avis',[AvisController::class,'store']);

Route::get('/Avis/{id}',[AvisController::class,'show']);

Route::put('/Avis/{id}',[AvisController::class,'update']);

Route::delete('/Avis/{id}',[AvisController::class,'destroy']);

//collaborateur
Route::get('/Collaborateurs',[CollaborateurController::class,'index']);

Route::post('/Collaborateur',[CollaborateurController::class,'store']);

Route::get('/Collaborateurs/{id}',[CollaborateurController::class,'show']);

Route::put('/Collaborateurs/{id}',[CollaborateurController::class,'update']);

Route::delete('/Collaborateurs/{id}',[CollaborateurController::class,'destroy']);



