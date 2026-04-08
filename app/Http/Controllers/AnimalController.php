<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        return view('pages.public.animals.index');
    }

    public function show(Animal $animal)
    {
        Animal::findOrFail($animal);
        return view('pages.public.animals.show');
    }
    
}


