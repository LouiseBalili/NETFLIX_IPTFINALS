<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TVShow extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genres',
        'release_date',
        'summary',
        'tvshow_pic',
    ];

    protected $casts = [
        'release_date' =>'date'
    ];

    protected $appends = ['formattedRelease_Date','release_date2','tvshow_pic_url'];

    public function getFormattedRelease_DateAttribute() {
        return $this->release_date->format('F d, Y');
    }

    public function getRelease_dateAttribute() {
        return $this->release_date->format('Y-m-d');
    }

    public function getTVShowPicUrlAttribute() {
        $url = $this->tvshow_pic ? asset("uploads/tvshow_pic/" . $this->tvshow_pic) : "TV Show Picture";
        return $url;
    }
}
