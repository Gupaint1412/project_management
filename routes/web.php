<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('integrated_budget', 'integrated_budget')
    ->middleware(['auth', 'verified'])
    ->name('integrated_budget');

require __DIR__.'/settings.php';
