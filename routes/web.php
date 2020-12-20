<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/HalamanPage', [App\Http\Controllers\HalamanPageController::class, 'HalamanPage']);
Route::get('/Page', [App\Http\Controllers\PageController::class, 'Page']);
Route::get('/Gallery', [App\Http\Controllers\GalleryController::class, 'Gallery']);
Route::get('/About', [App\Http\Controllers\AboutController::class, 'About']);
Route::get('/Fasilitas', [App\Http\Controllers\FasilitasController::class, 'Fasilitas']);
Route::post('/tambah', [App\Http\Controllers\FasilitasController::class, 'create']);
Route::get('/Fasilitas/{id}/edit', [App\Http\Controllers\FasilitasController::class, 'edit']);
Route::post('/Fasilitas/{id}/update', [App\Http\Controllers\FasilitasController::class, 'update']);
Route::get('/Fasilitas/{id}/delete', [App\Http\Controllers\FasilitasController::class, 'delete']);