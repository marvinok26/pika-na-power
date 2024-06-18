<?php

namespace Database\Seeders;

use App\Models\content\Stats;
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
            'sub_title' => 'Trainers',
        ]);

        Stats::create([
            'title' => 'Interactive',
            'value' => '534',
            'sub_title' => 'Sessions',
        ]);

        Stats::create([
            'title' => 'Delicious',
            'value' => '312',
            'sub_title' => 'Meals Cooked',
        ]);
    }
}
