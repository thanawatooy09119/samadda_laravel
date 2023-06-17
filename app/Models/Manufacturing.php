<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menufacturing extends Model
{
    protected $fillable = [
        'time',
        'name',
        'qty',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
