<?php

namespace Database\Seeders;

use App\Models\Content\Video;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'title' => 'How to Make Tasty Mbuzi Choma Using an Air Fryer',
            'date' => '2024-03-18',
            'url' => 'https://www.youtube.com/watch?v=123456',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Video::create([
            'title' => 'How to Make Tasty Mbuzi Choma Using an Air Fryer',
            'date' => '2024-03-18',
            'url' => 'https://www.youtube.com/watch?v=123456',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Video::create([
            'title' => 'How to Make Tasty Mbuzi Choma Using an Air Fryer',
            'date' => '2024-03-18',
            'url' => 'https://www.youtube.com/watch?v=123456',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Video::create([
            'title' => 'How to Make Tasty Mbuzi Choma Using an Air Fryer',
            'date' => '2024-03-18',
            'url' => 'https://www.youtube.com/watch?v=123456',
            'thumbnail' => '/images/banner.jpeg',
        ]);
    }
}
