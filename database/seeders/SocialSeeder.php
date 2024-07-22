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
                'icon' => 'images/facebook.png',
                'url' => 'https://www.facebook.com',
            ],
            [
                'name' => 'Instagram',
                'icon' => 'images/instagram.png',
                'url' => 'https://www.instagram.com',
            ],
            [
                'name' => 'X',
                'icon' => 'images/x.png',
                'url' => 'https://www.twitter.com',
            ],
            [
                'name' => 'Youtube',
                'icon' => 'images/youtube.png',
                'url' => 'https://www.youtube.com',
            ],
            [
                'name' => 'WhatsApp',
                'icon' => 'images/whatsapp.png',
                'url' => 'https://www.whatsapp.com',
            ],
            [
                'name' => 'TikTok',
                'icon' => 'images/tiktok.png',
                'url' => 'https://www.tiktok.com',
            ]
        ];

        foreach ($socials as $social) {
            Social::create($social);
        }
    }
}
