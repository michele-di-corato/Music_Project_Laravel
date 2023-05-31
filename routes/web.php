<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\UploadController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/upload', [PublicController::class, 'upload'])->name('upload');

Route::get('/support', [PublicController::class, 'support'])->name('support');

Route::post('/support/send', [PublicController::class, 'send'])->name('sendMail');

Route::get('/library', [UploadController::class, 'index'])->name('library');

Route::get('/library/song_details/{id}', [UploadController::class, 'show'])->name('songDetails');

Route::get('/upload_a_song', [UploadController::class, 'create'])->name('upload');

Route::post('/upload_a_song/save_song', [UploadController::class, 'store'])->name('saveSong');

Route::get('/edit_song/{song}', [UploadController::class, 'edit'])->name('editSong');

Route::put('/edit_song/update/{song}', [UploadController::class, 'update'])->name('updateSong');

Route::delete('/delete_song/{song}', [UploadController::class, 'destroy'])->name('deleteSong');
