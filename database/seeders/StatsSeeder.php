<?php

namespace Database\Seeders;

use App\Models\Content\Stats;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stats::create([
            'title' => 'Professional',
            'value' => '12',
            'subtitle' => 'Trainers',
        ]);

        Stats::create([
            'title' => 'Interactive',
            'value' => '534',
            'subtitle' => 'Sessions',
        ]);

        Stats::create([
            'title' => 'Delicious',
            'value' => '312',
            'subtitle' => 'Meals Cooked',
        ]);
    }
}
