<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.public.home');
});
Route::get('/contact', function () {
    return view('pages.public.contact');
});
Route::get('/animals.index', function () {
    return view('pages.public.animals.index');
});
Route::get('/animals.show', function () {
    return view('pages.public.animals.show');
});
Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});
