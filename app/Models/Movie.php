<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genres',
        'release_date',
        'summary',
        'movie_pic',
    ];

    protected $casts = [
        'release_date' =>'date'
    ];

    protected $appends = ['formattedRelease_Date','release_date2','movie_pic_url'];

    public function getFormattedRelease_DateAttribute() {
        return $this->release_date->format('F d, Y');
    }

    public function getRelease_dateAttribute() {
        return $this->release_date->format('Y-m-d');
    }

    public function getMoviePicUrlAttribute() {
        $url = $this->movie_pic ? asset("uploads/movie_pic/" . $this->movie_pic) : "Movie Picture";
        return $url;
    }
}
