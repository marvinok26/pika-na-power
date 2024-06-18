<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sections\ImageLeftTextRight;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(PageSectionSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(IntroVideoTextSeeder::class);
        $this->call(ApplianceSectionSeeder::class);
        $this->call(ApplianceSeeder::class);
        $this->call(DemonstrationClassSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TestimonialSectionSeeder::class);
        $this->call(BreadcrumbsSeeder::class);
        $this->call(ImageLeftTextRightSeeder::class);
    }
}
