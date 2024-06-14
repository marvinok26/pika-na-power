<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\DemonstrationClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DemonstrationClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DemonstrationClass::create([
            'title' => 'Join Pika Na Power\'s  Cooking Demonstration Classes!',
            'description' => 'Join the cookery classes at the Demo Centre in Electricity House, Nairobi, every Tuesday and Thursday from 12:30 pm to 1:45 pm.',
            'image' => '/images/class.png',
            'button_text' => 'Book Your Slot Now',
            'page_section_id' => 4,
        ]);
    }
}
