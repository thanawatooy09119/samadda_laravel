<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'des',
        'stock',
        'price',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'stetus',
        'size',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
