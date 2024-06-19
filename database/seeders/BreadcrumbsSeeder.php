<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\Breadcrumbs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BreadcrumbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Breadcrumbs::create([
            'page_section_id' => 7,
        ]);

        Breadcrumbs::create([
            'page_section_id' => 12,
        ]);

        Breadcrumbs::create([
            'page_section_id' => 18,
        ]);
    }
}
