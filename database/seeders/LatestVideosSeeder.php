<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\LatestVideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LatestVideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LatestVideo::create([
            'title' => 'Latest Videos',
            'button_text' => 'View on YouTube',
            'button_url' => 'https://www.youtube.com/',
            'page_section_id' => 14,
        ]);
    }
}
