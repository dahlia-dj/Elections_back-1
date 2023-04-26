<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegionController;
use \App\Http\Controllers\ParticipantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route ::get("/form_update_region/{id}",[RegionController::class,"edit"]);
Route ::get("/region_delete/{id}",[RegionController::class,"destroy"]);
Route ::get("/region_create",[RegionController::class,"index"]);
Route ::get("/region_liste",[RegionController::class,"create"]);
Route ::post("/region_insert",[RegionController::class,"store"]);
Route ::post("/region_update",[RegionController::class,"update"]);

Route ::get("/participant_create",[ParticipantController::class,"index"]);
Route ::get("/participant_liste",[ParticipantController::class,"create"]);
Route ::post("/participant_insert",[ParticipantController::class,"store"]);
Route ::get("/form_update_participant/{id}",[ParticipantController::class,"edit"]);
Route ::post("/Participant_update",[ParticipantController::class,"update"]);
Route ::get("/participant_delete/{id}",[ParticipantController::class,"destroy"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
