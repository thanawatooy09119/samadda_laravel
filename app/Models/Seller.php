<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
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