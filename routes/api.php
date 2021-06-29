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

Route::get('/references',[ReferenceController::class,'index']);

Route::post('/reference',[ReferenceController::class,'store']);

Route::get('/references/{id}',[ReferenceController::class,'show']);

Route::put('/references/{id}',[ReferenceController::class,'update']);

Route::delete('/references/{id}',[ReferenceController::class,'destroy']);