<?php

namespace Database\Seeders;

use App\Models\Sections\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => 'Reducing Emissions,Improving Lives',
            'description' => 'Smart, efficient, and sustainable fuel usage made easy! Join Pika na Power for an electrifying culinary journey today!',
            'image' => '/images/banner.jpeg',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'About Us',
            'image' => '/images/banner.jpeg',
            'page_section_id' => 6,
        ]);

        Banner::create([
            'title' => 'Our Cooking Classes',
            'image' => '/images/banner.jpeg',
            'page_section_id' => 11,
        ]);
    }
}
