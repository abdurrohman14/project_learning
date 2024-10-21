<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cast', 'img_url', 'sinopsis', 'direction', 'age', 'duration', 'trailer_url', 'price'
    ];
}
