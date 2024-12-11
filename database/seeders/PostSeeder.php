<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = Website::all();

        foreach ($websites as $website) {
            Post::create([
                'website_id' => $website->id,
                'title' => 'First post on ' . $website->name,
                'description' => 'This is the first post on ' . $website->name . '. Welcome to our blog!',
                'is_sent' => false,
            ]);

            Post::create([
                'website_id' => $website->id,
                'title' => 'Second post on ' . $website->name,
                'description' => 'This is the second post on ' . $website->name . '. We hope you\'re enjoying our content!',
                'is_sent' => false,
            ]);
        }
    }
}
