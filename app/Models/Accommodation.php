<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'slug',
        'room_number',
        'area',
        'bed_size',
        'address',
        'content',
        'images',
    ];

    public function getImagesAttribute()
    {
        return json_decode($this->attributes['images']);
    }

    public function setImagesAttribute(array $images)
    {
        $this->attributes['images'] = json_encode($images);
    }
}
