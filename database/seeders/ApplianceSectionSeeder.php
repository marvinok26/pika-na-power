<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\ApplianceSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplianceSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApplianceSection::create([
            'title' => 'Energy Efficient Appliances',
            'description' => 'Irure esse eiusmod veniam mollit ut fugiat ad nulla laboris ullamco aute et. Voluptate ullamco aute id ullamco ex minim. Veniam labore sunt occaecat. Ut eiusmod irure ipsum elit quis duis eu non voluptate reprehenderit occaecat eu irure.',
            'page_section_id' => 3,
        ]);

        ApplianceSection::create([
            'title' => 'Energy Efficient Appliances',
            'description' => 'Irure esse eiusmod veniam mollit ut fugiat ad nulla laboris ullamco aute et. Voluptate ullamco aute id ullamco ex minim. Veniam labore sunt occaecat. Ut eiusmod irure ipsum elit quis duis eu non voluptate reprehenderit occaecat eu irure.',
            'page_section_id' => 15,
        ]);
    }
}
