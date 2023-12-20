<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TVShowRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year_released',
    ];
}
