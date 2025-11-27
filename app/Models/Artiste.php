<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $fillable = [
        'nom',
        'genres',
        'ville',
        'photo_profil',
        'photo_couverture',
        'biographie',
        'featured'
    ];

    public function clips()
    {
        return $this->hasMany(Clip::class);
    }

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function musiques()
    {
    return $this->hasMany(Musique::class);
    
    }

    public function categorie()
{
    return $this->belongsTo(Categorie::class);
}


}
