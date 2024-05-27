<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'grade', 'prize', 'year'];
    protected $appends = ['img_url'];
    public function getImgUrlAttribute()
    {
        return asset('assets/img/students/'. $this->image);
    }
}
