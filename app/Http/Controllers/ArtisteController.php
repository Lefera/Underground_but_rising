<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Models\Album;
use App\Models\Musique;

class ArtisteController extends Controller
{
    public function index()
    {
     
    $artistes = Artiste::orderBy('nom')->get();

    $categories = ['Afrobeat', 'Hip-Hop', 'R&B', 'Trap', 'Gospel', 'Amapiano'];

    return view('front.artistes.index', compact('artistes', 'categories'));
    }

    public function show($id)
    {
        $artiste = Artiste::findOrFail($id);
        return view('front.artistes.show', compact('artiste'));
    }
}

    

