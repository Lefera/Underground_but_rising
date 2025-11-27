<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerieController extends Controller
{
     /**
     * Affiche la galerie
     */
    public function index()
    {
        // Tu pourras plus tard envoyer des images depuis la base de données
        // Pour l’instant on affiche juste la vue galerie.index
        return view('galerie.index');
    }
}
