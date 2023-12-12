<?php

use App\Http\Controllers\AltController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MatriksController;
use App\Http\Controllers\HitungController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kriteria', KriteriaController::class);
Route::delete('/kriteria/{id}', 'KriteriaController@destroy')->name('kriteria.destroy');

Route::resource('matriks', MatriksController::class);
// Route::get('/matriks/{id}/edit', 'MatriksController@edit')->name('matriks.edit');
Route::resource('alt', AltController::class);
Route::resource('hitung', HitungController::class);
