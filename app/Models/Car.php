<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    public function mainImage()
    {
        return $this->hasOne(CarImage::class)->where('is_main', 1);
    }
}
