<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::group(['prefix' => '/services'], function () {
    Route::get('/developpements', [PageController::class, 'dev'])->name('dev');
    Route::get('/digital', [PageController::class, 'digital'])->name('digital');
    Route::get('/graphics', [PageController::class, 'graphics'])->name('graphic');
    Route::get('/medias', [PageController::class, 'medias'])->name('media');
    Route::get('/motions', [PageController::class, 'motions'])->name('motion');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
