<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'status',
        'address',
        'tel',
        'role',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
