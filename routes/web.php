<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\front\AlbumController;
use App\Http\Controllers\MusiqueController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArtisteController;
use App\Http\Controllers\GalerieController;

// -----------------------
// 🚀 PAGES PUBLIQUES (FRONT)
// -----------------------

// Accueil
Route::get('/', [AccueilController::class, 'index'])->name('home');

// Artistes
Route::get('/artistes', [ArtisteController::class, 'index'])->name('front.artistes.index');
Route::get('/artistes/{id}', [ArtisteController::class, 'show'])->name('front.artistes.show');

// Galerie Photos
Route::get('/galerie', [GalerieController::class, 'index'])->name('galerie.index');

// Albums (visibles sans connexion)
Route::get('/albums', [frontAlbumController::class,'index'])->name('front.albums.index');
Route::get('/albums/{id}', [frontAlbumController::class, 'show'])->name('front.albums.show');

// Musiques (visibles sans connexion)
Route::resource('musiques', MusiqueController::class)->only(['index', 'show']);


// -----------------------
// 🔐 ESPACE ADMIN (BACK)
// -----------------------

Route::middleware(['auth'])->group(function () {

    // Tableau de bord Breeze
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profil utilisateur Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD Admin (Création / Modification / Suppression)

    // Catégories
    Route::resource('categories', CategorieController::class);

    // Albums (create / edit / update / destroy)
    Route::resource('albums', AlbumController::class)->except(['index', 'show']);

    // Musiques (create / edit / update / destroy)
    Route::resource('musiques', MusiqueController::class)->except(['index', 'show']);
});

// Auth routes Breeze
require __DIR__ . '/auth.php';
