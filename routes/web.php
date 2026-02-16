<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
});
Route::get('/contact', function () {
    return view('public.contact');
});
Route::get('/animals.index', function () {
    return view('public.animals.index');
});
Route::get('/animals.show', function () {
    return view('public.animals.show');
});
