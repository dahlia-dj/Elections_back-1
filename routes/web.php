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


Route::get('/region_insert', function () {
    return view('formulaire_region');
});

Route::post('/region_insert', function () {
    return "Nouvelle region engistree:" .request('region');
});

Route ::get("/region_create",[RegionController::class,"index"]);
Route ::post("/region_insert",[RegionController::class,"store"]);