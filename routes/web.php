<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'welcome'])->name('home');

Route::get('/artikel', [ArticleController::class, 'frontendIndex'])->name('artikel.index');
Route::get('/artikel/{article}', [ArticleController::class, 'frontendShow'])->name('artikel.show');

Route::get('/produk', [ProductController::class, 'frontendIndex'])->name('products.front');
Route::view('/gallery', 'frontend.galeri')->name('galeri.index');

Route::middleware(['auth', 'verified', \App\Http\Middleware\IsAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('articles', ArticleController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

