<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [PageController::class, 'show'])->defaults('page', 'index')->name('home');
Route::get('/dark', [PageController::class, 'show'])->defaults('page', 'index')->defaults('forceDark', true)->name('home.dark');
Route::get('/contact', [PageController::class, 'show'])->defaults('page', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/chatbot', [ChatbotController::class, 'chat'])->name('chatbot.chat');
Route::get('/about', [PageController::class, 'show'])->defaults('page', 'about')->name('about');
Route::get('/registrasi', [RegistrationController::class, 'create'])->name('registration.create');
Route::get('/api/paket', [RegistrationController::class, 'packages'])->name('registration.packages');
Route::post('/registrasi', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registrasi/berhasil', [RegistrationController::class, 'success'])->name('registration.success');

$pages = collect(array_keys((array) config('pages')))->reject(fn ($p) => $p === 'index');

foreach ($pages as $page) {
    Route::get('/' . $page, [PageController::class, 'show'])->defaults('page', $page)->name($page);
}
