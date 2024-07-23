<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $regions = [
            '11-nji mikrorayon',
            '6-nji mikrorayon',
            '8-nji mikrorayon',
            '30-njy mikrorayon',
            'Parahat 7',
            'Parahat 8',
            'Parahat 6',
            '15-nji tapgyr',
            '14-nji tapgyr',
            'Podwoyski',
            'Savetski',
            'Hitrowka',
            'Parahat 4',
        ];
        $location = Location::inRandomOrder()->first();

        return [
            'name' => fake()->randomElement($regions),
            'location_id' => $location->id,
        ];
    }
}
