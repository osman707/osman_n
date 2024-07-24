<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\Location;
use App\Models\Time;
use App\Models\Occupation;
use App\Models\Region;
use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\OccupationFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            LocationSeeder::class,
            TimeSeeder::class,
        ]);

        Company::factory()
            ->count(50)
            ->create();

        Region::factory()
            ->count(100)
            ->create();

        Occupation::factory()
            ->count(50)
            ->create();

        Listing::factory()
        ->count(1)
        ->create();
    }
}
