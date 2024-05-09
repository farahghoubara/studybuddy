<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WallpaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wallpapers')->insert([
            [
                'path' => 'wallpaper-one.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'wallpaper-two.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'wallpaper-three.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'wallpaper-four.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'wallpaper-five.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
