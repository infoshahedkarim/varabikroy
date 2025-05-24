<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function place()
    {
    return $this->belongsTo(Place::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
{
    return $this->hasMany(Image::class);
}

    
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'img',
        'price',
        'place_id',
        'category_id',
        'des',
        'contact',
        'premium_ads'
    ];
}
