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
            // Home page
            ['page_id' => 1, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 1, 'section_id' => 2, 'order' => 2,],
            ['page_id' => 1, 'section_id' => 3, 'order' => 3,],
            ['page_id' => 1, 'section_id' => 4, 'order' => 4,],
            ['page_id' => 1, 'section_id' => 5, 'order' => 5,],

            // About Us page
            ['page_id' => 2, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 2, 'section_id' => 6, 'order' => 2,],
            ['page_id' => 2, 'section_id' => 7, 'order' => 3,],
            ['page_id' => 2, 'section_id' => 8, 'order' => 4,],
            ['page_id' => 2, 'section_id' => 9, 'order' => 5,],

            // Classes page
            ['page_id' => 3, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 3, 'section_id' => 6, 'order' => 2,],
            ['page_id' => 3, 'section_id' => 10, 'order' => 3,],
            ['page_id' => 3, 'section_id' => 11, 'order' => 4,],
            ['page_id' => 3, 'section_id' => 3, 'order' => 5,],
            ['page_id' => 3, 'section_id' => 4, 'order' => 6,],
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
