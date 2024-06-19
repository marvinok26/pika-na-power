<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content\QuickLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuickLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'title' => 'About Us',
                'url' => '/about-us',
            ],
            [
                'title' => 'Classes',
                'url' => '/classes',
            ],
            [
                'title' => 'Events',
                'url' => '/events',
            ],
            [
                'title' => 'Contact Us',
                'url' => '/contact-us',
            ],
        ];

        foreach ($links as $link) {
            QuickLink::create($link);
        }
    }
}
