<?php

use App\Livewire\LibeloForm;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/offline', function () {
    return view('offline');
})->name('offline');

Volt::route('/viabilidade', 'pages.viabilidade')->name('viabilidade');
Volt::route('/resultado', 'pages.resultado')->name('resultado');
Volt::route('/grupos', 'pages.grupos')->name('grupos');
Volt::route('/faq', 'pages.faq')->name('faq');
Volt::route('/glossario', 'pages.glossario')->name('glossario');

Route::middleware(['auth'])->group(function () {
    Route::get('/formulario-libelo', LibeloForm::class)->name('libelo.form');
});

require __DIR__ . '/settings.php';
