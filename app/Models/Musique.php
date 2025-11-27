<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musique extends Model
{
    protected $fillable = [
        'album_id',
        'artiste_id',
        'titre',
        'duree',
        'fichier_audio',
        'video_url',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }
}
