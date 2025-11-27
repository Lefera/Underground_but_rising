<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'artiste_id',
        'image'
    ];

    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }
}
