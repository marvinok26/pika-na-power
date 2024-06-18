<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\OurPartners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OurPartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurPartners::create([
            'title' => 'Our Partners',
            'page_section_id' => 10,
        ]);
    }
}
