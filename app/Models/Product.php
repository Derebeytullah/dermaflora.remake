<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $product = 'product';

    protected $fillable = [
        'id',
        'title',
        'content',
        'image',
        'price',
        'link',
    ];
}
