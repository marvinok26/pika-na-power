<?php

namespace Database\Seeders;

use App\Models\Content\Event;
use Illuminate\Database\Seeder;
use App\Models\Sections\EventsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventsSection::create([
            'page_section_id' => 24,
        ]);
    }
}
