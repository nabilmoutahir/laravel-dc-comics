<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {
  return view('home');
})->name('home');

// INDEX
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// CREATE
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// SHOW
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// STORE
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// UPDATE
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::patch('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// DELETE
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');
