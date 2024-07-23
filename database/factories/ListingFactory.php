<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Occupation;
use App\Models\Region;
use App\Models\Time;
use Database\Seeders\TimeSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @
     */
    public function definition()
    {
        $company = Company::inRandomOrder()->first();
        $occupation = Occupation::inRandomOrder()->first();
        $region = Region::with('location')->inRandomOrder()->first();
        $time = Time::inRandomOrder()->first();

        return [
            'title' => fake()->sentence,
            'occupation_id' => $occupation->id,
            'company_id' => $company->id,
            'time_id' => $time->id,
            'region_id' => $region->id,
            'location_id' => $region->location->id,
            'description' => fake()->sentence,
            'salary' => $this->generateSalary(),
            'phone_number' => fake()->phoneNumber,

        ];
    }
    private function generateSalary()
    {
        // Ağırlıklı olarak düşük maaş üretimi
        $probability = rand(0, 100);

        if ($probability < 90) {
            // %90 ihtimalle 500 ile 5000 arasında maaş
            return $this->getRandomSalary(1000, 5000, 500);
        } else {
            // %10 ihtimalle 5000 ile 20000 arasında maaş
            return $this->getRandomSalary(5000, 20000, 2000);
        }
    }

    private function getRandomSalary($min, $max, $step)
    {
        $range = range($min, $max, $step);
        return $range[array_rand($range)];
    }
}
