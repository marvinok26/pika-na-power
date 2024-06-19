<?php

namespace Database\Seeders;

use App\Models\Content\Social;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socials = [
            [
                'name' => 'Facebook',
                'icon' => 'images/fb.svg',
                'url' => 'https://www.facebook.com',
            ],
            [
                'name' => 'Instagram',
                'icon' => 'images/fb.svg',
                'url' => 'https://www.instagram.com',
            ],
            [
                'name' => 'X',
                'icon' => 'images/fb.svg',
                'url' => 'https://www.twitter.com',
            ],
            [
                'name' => 'Youtube',
                'icon' => 'images/fb.svg',
                'url' => 'https://www.youtube.com',
            ],
            [
                'name' => 'WhatsApp',
                'icon' => 'images/fb.svg',
                'url' => 'https://www.whatsapp.com',
            ],
            [
                'name' => 'TikTok',
                'icon' => 'images/fb.svg',
                'url' => 'https://www.tiktok.com',
            ]
        ];

        foreach ($socials as $social) {
            Social::create($social);
        }
    }
}
