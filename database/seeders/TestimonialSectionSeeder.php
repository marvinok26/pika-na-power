<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\content\Testimonial;
use App\Models\Sections\TestimonialsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonialSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestimonialsSection::create([
            'title' => 'Testimonials',
            'page_section_id' => 5,
        ]);
    }
}
