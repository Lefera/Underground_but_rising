<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artiste;
use App\Models\Musique;
use App\Models\Categorie;

class AccueilController extends Controller
{
    public function index()
    {
        // ARTISTES À LA UNE (featured)
        $featuredArtists = Artiste::where('featured', true)
            ->take(8)
            ->get();

        // ALBUMS RÉCENTS
        $albums = Album::latest()
            ->take(8)
            ->get();

        // VIDÉOS = musiques qui ont un lien video_url
        $videos = Musique::whereNotNull('video_url')
            ->latest()
            ->take(4)
            ->get();

        // CATÉGORIES MUSICALES
        $categories = Categorie::all();

        // RETOURNE LA VUE accueil.blade.php
        return view('accueil.index', [
            'featured'   => $featuredArtists,
            'albums'     => $albums,
            'videos'     => $videos,
            'categories' => $categories,
        ]);
    }
}
