<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\ContactForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactForm::create([
            'title' => 'Message Us',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1110.3139284833308!2d36.8199719661811!3d-1.2714797605867967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17261b877ccf%3A0xd2347e36b0f2f5d1!2sStima%20Plaza%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1716469518962!5m2!1sen!2ske',
            'page_section_id' => 28,
        ]);
    }
}
