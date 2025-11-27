<?php

namespace App\Http\Controllers;

use App\Models\Artiste;   // 👉 Import obligatoire

class ArtisteController extends Controller
{
    public function index()
    {
          $featured = Artiste::where('featured', 1)->take(6)->get();
    $albums = Album::latest()->take(6)->get();
    $clips = Clip::orderBy('views', 'DESC')->take(6)->get();
    $categories = ['Afrobeat','Hip-Hop','R&B','Trap','Gospel','Amapiano'];

    return view('accueil.index', compact('featured', 'albums', 'clips', 'categories'));

    }

    public function show($id)
    {
        $artiste = Artiste::findOrFail($id);

        // Relations (assure-toi qu’elles existent dans les modèles)
        $albums = $artiste->albums;
        $musiques = $artiste->musiques;
        $photos = $artiste->photos;

        return view('front.artistes.show', compact('artiste', 'albums', 'musiques', 'photos'));
    }
}
