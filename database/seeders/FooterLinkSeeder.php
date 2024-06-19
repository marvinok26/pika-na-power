<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content\FooterLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'title' => 'Privacy Policy',
                'url' => '#',
            ],
            [
                'title' => 'Terms & Conditions',
                'url' => '#',
            ],
            [
                'title' => 'Contact Us',
                'url' => '/contact-us',
            ],
        ];

        foreach ($links as $link) {
            FooterLink::create($link);
        }
    }
}
