<?php

namespace Database\Seeders;

use App\Models\Content\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'title' => 'Phone',
            'subtitle' => '(+254) 721 345 335',
            'icon' => 'phone',
        ]);

        Contact::create([
            'title' => 'Email',
            'subtitle' => 'info@pikanapower.co.ke
            PikanaPower@kplc.co.ke',
            'icon' => 'email',
        ]);

        Contact::create([
            'title' => 'Nkrumah Ln, Nairobi',
            'subtitle' => 'Electricity House',
            'icon' => 'location',
        ]);

        Contact::create([
            'title' => 'P.O. BOX',
            'subtitle' => '30099-00100',
            'icon' => 'location',
        ]);
    }
}
