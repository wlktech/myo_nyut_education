<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            ["image" => "1.png"],
            ["image" => "2.png"],
            ["image" => "3.png"],
        ];
        foreach($reviews as $review)
        {
            Review::create($review);
        }
    }
}
