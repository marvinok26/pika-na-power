<?php

namespace Database\Seeders;

use App\Models\Content\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);

        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);

        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);

        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);

        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);

        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);

        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);

        Partner::create([
            'logo' => '/images/logo.svg',
            'url' => 'https://me.com'
        ]);
    }
}
