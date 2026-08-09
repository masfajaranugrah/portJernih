<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'show'])->defaults('page', 'index')->name('home');
Route::get('/dark', [PageController::class, 'show'])->defaults('page', 'index')->defaults('forceDark', true)->name('home.dark');
Route::get('/contact', [PageController::class, 'show'])->defaults('page', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', [PageController::class, 'show'])->defaults('page', 'about')->name('about');

$pages = collect(array_keys((array) config('pages')))->reject(fn ($p) => $p === 'index');

foreach ($pages as $page) {
    Route::get('/' . $page, [PageController::class, 'show'])->defaults('page', $page)->name($page);
}
