<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content\FooterPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Home',
                'url' => '/',
            ],
            [
                'title' => 'About Us',
                'url' => '/about-us',
            ],
            [
                'title' => 'Classes',
                'url' => '/classes',
            ],
            [
                'title' => 'Articles & Resources',
                'url' => '/articles-resources',
            ],
            [
                'title' => 'Events',
                'url' => '/events',
            ],
        ];

        foreach ($pages as $page) {
            FooterPage::create($page);
        }
    }
}
