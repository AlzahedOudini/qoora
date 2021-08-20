<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'index'])->name('contact');

Route::group(['prefix' => '/services'], function () {
    Route::get('/dev', [PageController::class, 'index'])->name('dev');
    Route::get('/digital', [PageController::class, 'index'])->name('digital');
    Route::get('/graphic', [PageController::class, 'index'])->name('graphic');
    Route::get('/media', [PageController::class, 'index'])->name('media');
    Route::get('/motion', [PageController::class, 'index'])->name('motion');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
