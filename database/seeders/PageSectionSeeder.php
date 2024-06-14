<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pages\PageSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageSections = [
            ['page_id' => 1, 'section_id' => 1, 'order' => 1,],
        ];

        foreach ($pageSections as $pageSection) {
            PageSection::create([
                'page_id' => $pageSection['page_id'],
                'section_id' => $pageSection['section_id'],
                'order' => $pageSection['order'],
            ]);
        }
    }
}
