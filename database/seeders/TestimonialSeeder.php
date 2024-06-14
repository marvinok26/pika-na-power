<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\content\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quas atque et eum porro, id magnam culpa ducimus commodi odit aliquam! Rem fuga vitae officia repellat, harum vero quia ex!"',
            'author' => 'Halim Salim',
            'author_location' => 'Mombasa',
        ]);

        Testimonial::create([
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quas atque et eum porro, id magnam culpa ducimus commodi odit aliquam! Rem fuga vitae officia repellat, harum vero quia ex!"',
            'author' => 'Halim Salim',
            'author_location' => 'Mombasa',
        ]);

        Testimonial::create([
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quas atque et eum porro, id magnam culpa ducimus commodi odit aliquam! Rem fuga vitae officia repellat, harum vero quia ex!"',
            'author' => 'Halim Salim',
            'author_location' => 'Mombasa',
        ]);
    }
}
