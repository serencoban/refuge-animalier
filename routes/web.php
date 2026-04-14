<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('public.home');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('public.contact');
Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'index'])->name('public.animals.index');
Route::get('/animals/{animal}', [\App\Http\Controllers\AnimalController::class, 'show'])->name('public.animals.show');

Route::livewire('/admin/dashboard', 'pages::dashboard')->name('dashboard');
