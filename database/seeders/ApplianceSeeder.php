<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content\Appliance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appliance::create([
            'image' => '/images/cooker.svg',
            'title' => 'Item Title',
            'button_text' => 'View',
            'button_url' => '#',
        ]);

        Appliance::create([
            'image' => '/images/cooker.svg',
            'title' => 'Item Title',
            'button_text' => 'View',
            'button_url' => '#',
        ]);

        Appliance::create([
            'image' => '/images/cooker.svg',
            'title' => 'Item Title',
            'button_text' => 'View',
            'button_url' => '#',
        ]);

        Appliance::create([
            'image' => '/images/cooker.svg',
            'title' => 'Item Title',
            'button_text' => 'View',
            'button_url' => '#',
        ]);
    }
}
