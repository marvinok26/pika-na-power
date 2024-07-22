<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\ResourcesSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResourcesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ResourcesSection::create([
            'title' => 'Resources',
            'description' => 'Laborum occaecat aliquip ad labore irure do exercitation aliqua aliquip enim laboris adipisicing. Occaecat fugiat cupidatat nulla. Ad aliqua enim magna irure incididunt aliqua nulla do duis.',
            'page_section_id' => 20
        ]);
    }
}
