<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Admin\Dashboard;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('public.home');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('public.contact');
Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'index'])->name('public.animals.index');
Route::get('/animals/{animal}', [\App\Http\Controllers\AnimalController::class, 'show'])->name('public.animals.show');

Route::get('/admin/dashboard',function () {
    return view('admin.dashboard');
} )->name('dashboard');

Route::get('/admin/animals',function () {
    return view('pages.animals.index');
} )->name('admin.animals.index');

Route::get('/admin/animals/{animal}',function () {
    return view('pages.animals.show');
} )->name('admin.animals.show');
