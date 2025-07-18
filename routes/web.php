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

Route::get('/federal-state-tax', function () {
    return view('federal-state-tax');
})->name('federal-state-tax');

Route::get('/fbar-fatca-processing', function () {
    return view('fbar-fatca-processing');
})->name('fbar-fatca-processing');

Route::get('/itin-processing', function () {
    return view('itin-processing');
})->name('itin-processing');

Route::get('/tax-representation', function () {
    return view('tax-representation');
})->name('tax-representation');

Route::get('/amendment-filing', function () {
    return view('amendment-filing');
})->name('amendment-filing');

Route::get('/indian-tax', function () {
    return view('indian-tax');
})->name('indian-tax');

Route::get('/advanced-tax', function () {
    return view('advanced-tax');
})->name('advanced-tax');

Route::get('/entity-formation', function () {
    return view('entity-formation');
})->name('entity-formation');

Route::get('/corporate-tax', function () {
    return view('corporate-tax');
})->name('corporate-tax');

Route::get('/limited-liability-company', function () {
    return view('limited-liability-company');
})->name('limited-liability-company');

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
