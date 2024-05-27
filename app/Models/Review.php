<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['image'];
    protected $appends = ['img_url'];

    public function getImgUrlAttribute()
    {
        return asset("assets/img/reviews/$this->image");
    }
}
