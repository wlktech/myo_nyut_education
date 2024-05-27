<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            ["image" => "1.png"],
            ["image" => "2.png"],
            ["image" => "3.png"],
        ];
        foreach($banners as $banner)
        {
            Banner::create($banner);
        }
    }
}
