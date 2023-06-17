<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'sedn',
        'list',
        'qty',
        'price',
        'custormer_id',
        'time',
        'bank',
        'img',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
