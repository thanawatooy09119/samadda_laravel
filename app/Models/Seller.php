<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user',
        'password',
        'name',
        'status',
        'address',
        'tel',
        'role'

    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
