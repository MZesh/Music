<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\UploadController;
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

Route::get('/', [MusicController::class,'homePage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/songs', [MusicController::class, 'songs'])->name('music.songs');
Route::get('/allcategory', [MusicController::class, 'allcategory'])->name('music.allcategory');
Route::get('/instrumental', [MusicController::class, 'instrumental'])->name('music.instrumental');
Route::get('/audio', [MusicController::class, 'audio'])->name('music.audio');
Route::get('/watch/{id}', [MusicController::class, 'watch'])->name('music.watch');

//search
Route::get('/search', [MusicController::class, 'search'])->name('music.search');
Route::get('/search-audio', [MusicController::class, 'searchAudio'])->name('music.searchAudio');

//for uploading
Route::prefix('upload')->middleware('auth')->group(function () {
    Route::get('/', [UploadController::class, 'upload'])->name('music.upload');
    Route::post('/music', [UploadController::class, 'uploadmusic'])->name('music.uploadmusic');
});


