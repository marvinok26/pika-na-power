<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\ArticlesSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticlesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticlesSection::create([
            'page_section_id' => 19,
        ]);
    }
}
