<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'artiste_id',
        'titre',
        'cover',
        'annee'
    ];

    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }

    public function musiques()
    {
    return $this->hasMany(Musique::class);
    
    }

}
