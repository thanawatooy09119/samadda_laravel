<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Customer extends Model
{
    use HasFactory;
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
