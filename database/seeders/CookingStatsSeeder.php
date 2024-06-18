<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\CookingStats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CookingStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CookingStats::create([
            'title' => 'Enhance your culinary prowess with live cooking classes and workshops',
            'page_section_id' => 13,
        ]);
    }
}
