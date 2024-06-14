<?php

namespace Database\Seeders;

use App\Models\Pages\Section;
use App\Models\Sections\Banner;
use Illuminate\Database\Seeder;
use App\Models\Sections\IntroVideoText;
use App\Models\Sections\ApplianceSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ['Banner', Banner::class, 'placeholder.png'],
            ['Intro Video Text', IntroVideoText::class, 'placeholder.png'],
            ['Appliances Section', ApplianceSection::class, 'placeholder.png'],
        ];

        foreach ($sections as $section) {
            Section::create([
                'name' => $section[0],
                'model_type' => $section[1],
                'thumbnail' => $section[2],
            ]);
        }
    }
}
