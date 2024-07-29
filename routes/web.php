<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('/posts', PostController::class);
// Route::prefix('posts')->name('posts.')->group(function() {
//     Route::get('/', [PostController::class, 'index'])->name('show');
//     Route::get('/create', [PostController::class, 'create'])->name('create');
//     Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');
//     Route::get()
// });

require __DIR__.'/auth.php';
