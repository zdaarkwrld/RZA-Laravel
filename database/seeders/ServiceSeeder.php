<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'safary_style_wildlife_zoo',
                'price' => '22.99'
            ],
            [
                'name' => 'educational_visit',
                'price' => '18.99'
            ],
        ];

        // Loop through each service entry and create a new record
        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }
    }
}
