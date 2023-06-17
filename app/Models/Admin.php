<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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
