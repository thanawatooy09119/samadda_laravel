<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'status',
        'address',
        'tel',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
