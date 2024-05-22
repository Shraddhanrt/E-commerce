<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guraded = [];
    protected  $fillable = [
        'name',
        'description',
        'cost',
        'quantity',
        'image',
        'active',
        'featured'

    ];
}
