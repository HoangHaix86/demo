<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $fillable = [
        'title',
        'slug',
        'content',
        'images', // '['image1.jpg', 'image2.jpg', 'image3.jpg']'
    ];
}
