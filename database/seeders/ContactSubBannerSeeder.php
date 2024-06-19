<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\ContactSubBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSubBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactSubBanner::create([
            'title' => 'We like to talk and on the strength of that you are invited for a coffee',
            'page_section_id' => 27,
        ]);
    }
}
