<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\ImageLeftTextRight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageLeftTextRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $text = <<<TEXT
        The Pika na Power initiative represents a paradigm shift in culinary practises, leveraging the power of electricity to create a more sustainable, healthier, and efficient cooking landscape. 

        With its potential to improve indoor air quality, reduce carbon emissions, empower communities, and safeguard natural resources. E-cooking stands as a beacon of progress towards a greener and more equitable future.

        Through concerted efforts and innovative approaches, the eCooking programme can reshape how we cook and nourish ourselves while contributing to a more sustainable planet for future generations.
        TEXT;

        ImageLeftTextRight::create([
            'image' => '/images/banner.jpeg',
            'description' => $text,
            'page_section_id' => 8,
        ]);
    }
}
