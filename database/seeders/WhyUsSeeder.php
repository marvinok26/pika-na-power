<?php

namespace Database\Seeders;

use App\Models\Sections\WhyUs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $text = <<<TEXT
        Pika na Power aims to revolutionise traditional cooking practises by leveraging electric-powered cooking appliances and technologies. Its overarching goal is to create a more sustainable, efficient, and healthy way of preparing food while addressing various challenges associated with traditional cooking methods. 

        Here's how the eCooking initiative aims to transform cooking practises:
        TEXT;

        WhyUs::create([
            'title' => 'Why Pika na Power',
            'description' => $text,
            'image' => '/images/banner.jpeg',
            'page_section_id' => 9,
        ]);
    }
}
