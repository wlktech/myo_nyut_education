<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\BannerSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BannerSeeder::class,
            PostSeeder::class,
            ReviewSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
