<?php

use App\Http\Controllers\Api\BulletinController;
use App\Http\Controllers\Api\ElectionController;
use App\Http\Controllers\Api\ParticipantController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\VoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('bulletin', BulletinController::class);
Route::apiResource('election', ElectionController::class);
Route::apiResource('participant', ParticipantController::class);
Route::get("/onoff/{id}",[ParticipantController::class,"onoff"]);
Route::apiResource('region', RegionController::class);
Route::apiResource('vote', VoteController::class);