<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/contact', function () {
    return view('contact-us');
})->name('contact');


Route::get('/individual-tax-fill', function () {
    return view('individual-tax-fill');
})->name('individual-tax-fill');

Route::get('/business-tax-fill', function () {
    return view('business-tax-fill');
})->name('business-tax-fill');

Route::get('/payroll', function () {
    return view('payroll');
})->name('payroll');

Route::get('/book-keeping', function () {
    return view('book-keeping');
})->name('book-keeping');

Route::get('/refund', function () {
    return view('refund');
})->name('refund');

Route::get('/referral', function () {
    return view('referral');
})->name('referral');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
