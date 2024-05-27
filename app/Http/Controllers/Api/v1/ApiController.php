<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Review;
use App\Models\Student;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use HttpResponses;
    public function home()
    {
        $banners = Banner::latest()->get();
        $posts = Post::latest()->get();
        $reviews = Review::latest()->get();
        $students = Student::latest()->get();

        return $this->success([
            'banners' => $banners,
            'posts' => $posts,
            'reviews' => $reviews,
            'students' => $students,
        ], "Success");
        
    }
}
