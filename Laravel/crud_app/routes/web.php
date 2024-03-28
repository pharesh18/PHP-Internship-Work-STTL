<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [PlayerController::class, 'view'])->name('player.view');
Route::get("/register", [PlayerController::class, 'playerForm'])->name('player.form');
Route::post("/register", [PlayerController::class, 'createPlayer'])->name('player.create');
Route::get("/delete/{id}", [PlayerController::class, 'delete'])->name('player.delete');
Route::get("/update/{id}", [PlayerController::class, 'edit'])->name('player.edit');
Route::post("/update/{id}", [PlayerController::class, 'update'])->name('player.update');