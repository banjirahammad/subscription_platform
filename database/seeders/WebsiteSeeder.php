<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = [
            ['name' => 'Tech News', 'url' => 'https://technews.com'],
            ['name' => 'Laravel News', 'url' => 'https://laravel-news.com/'],
            ['name' => 'Jamuna TV', 'url' => 'https://jamuna.tv/'],
        ];

        foreach ($websites as $website) {
            Website::create($website);
        }
    }
}
