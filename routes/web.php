<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegionController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
