<?php

namespace App\Http\Controllers;

class AnimalController extends Controller
{
    public function index()
    {

    }

    public function show(Animal $animal)
    {
        return view('pages.public.animals.show');
    }
}
