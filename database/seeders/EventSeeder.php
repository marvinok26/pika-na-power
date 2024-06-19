<?php

namespace Database\Seeders;

use App\Models\Content\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Kakamega eCooking Hub Launch',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch2',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch3',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch4',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch5',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch6',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch7',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch8',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch9',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch10',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch11',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);

        Event::create([
            'title' => 'Kakamega eCooking Hub Launch12',
            'date' => '2024-03-18',
            'thumbnail' => '/images/banner.jpeg',
        ]);
    }
}
