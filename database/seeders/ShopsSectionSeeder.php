<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\ShopsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShopsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShopsSection::create([
            'title' => 'Shops',
            'description' => 'Purchase the appliances all at leading supermarkets and retail outlets, including:',
            'page_section_id' => 21,
        ]);
    }
}
