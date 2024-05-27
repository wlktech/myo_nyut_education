<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            ["title" => "Post 1", "image" => "1.png", "content" => "This is the content of post 1."],
            ["title" => "Post 2", "image" => "2.png", "content" => "This is the content of post 2."],
            ["title" => "Post 3", "image" => "3.png", "content" => "This is the content of post 3."],
            ["title" => "Post 4", "image" => "4.png", "content" => "This is the content of post 4."],
            ["title" => "Post 5", "image" => "5.png", "content" => "This is the content of post 5."],
            ["title" => "Post 6", "image" => "6.png", "content" => "This is the content of post 6."],
        ];

        foreach($posts as $post)
        {
            Post::create($post);
        }
    }
}
