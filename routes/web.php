<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', [PostController::class, 'index']);
Route::get('/post-show', [PostController::class, 'show'])->name('job.listings');
Route::get('/post-show-details', [PostController::class, 'showDetails'])->name('job.details');
Route::get('/about', [PostController::class, 'about'])->name('about');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

require __DIR__ . '/auth.php';
