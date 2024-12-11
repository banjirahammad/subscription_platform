<?php

namespace Database\Seeders;

use App\Models\Subscription;
use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = Website::all();

        foreach ($websites as $website) {
            Subscription::create([
                'website_id' => $website->id,
                'email' => 'admin@test.com',
            ]);

            Subscription::create([
                'website_id' => $website->id,
                'email' => 'banjirahammad@gmail.com',
            ]);
        }
    }
}
