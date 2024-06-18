<?php

namespace Database\Seeders;

use App\Models\Content\Benefit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Benefit::create([
            'title' => 'Energy Efficiency',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Cleaner Cooking',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Environmental Sustainability',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Health Benefits',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Safety',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Reduced Workload',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Cultural Acceptance and Modernization',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Capacity Building',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Equitable Access',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
        Benefit::create([
            'title' => 'Global Sustainable Development',
            'description' => 'Mollit duis ex sit Lorem aute reprehenderit labore aliqua proident magna ex commodo tempor. Pariatur ea tempor mollit laborum ut qui amet enim ea labore aute. Pariatur magna velit velit. Ad elit incididunt esse nulla adipisicing labore cupidatat laborum enim ex.',
        ]);
    }
}
