<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photo::create([
            'title' => 'AI Can Summarize But can it be trusted',
            'image_path' => 'poster_presentasi_1.jpg'
        ]);

        Photo::create([
            'title' => 'Finding Identity in Imperfection',
            'image_path' => 'poster_presentasi_2.jpeg'
        ]);

        Photo::create([
            'title' => 'Poster Presentasi Proyek 3',
            'image_path' => 'poster_presentasi_3.jpeg'
        ]);
    }
}
