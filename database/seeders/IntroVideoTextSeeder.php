<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\IntroVideoText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IntroVideoTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $description = <<<TEXT
        Pika na Power is Kenya Power's flagship campaign aimed at creating awareness towards shifting to cooking with electricity using modern appliances. The Pika na Power initiative also seeks to demystify the common perception that cooking with electricity is expensive. 

        Research has shown that compared to traditional cooking methods using solid fuels, eCooking offers numerous advantages, including efficiency, improved indoor air quality, enhanced safety, and reduced greenhouse gas emissions.
        TEXT;

        IntroVideoText::create([
            'title' => 'Embrace Clean Technologies for a Greener Cooking Future with Pika na Power!',
            'description' => $description,
            'video_url' => 'https://www.youtube.com/embed/KaHWa6kke9M',
            'button_text' => 'Read More',
            'button_url' => '/articles',
            'page_section_id' => 1,
        ]);
    }
}
