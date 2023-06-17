<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'title',
        'keyword',
        'heading',
        'content',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
    ];

    protected $casts = [
        
    ];
}
