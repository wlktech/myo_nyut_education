<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'content'];
    protected $appends = ['img_url'];
    public function getImgUrlAttribute()
    {
        return asset('assets/img/posts/'. $this->image);
    }
}
