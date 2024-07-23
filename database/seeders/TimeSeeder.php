<?php

namespace Database\Seeders;

use App\Models\Occupation;
use App\Models\Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $occupations = [
            'full time',
            'part time',
        ];
        foreach ($occupations as $occupation) {
            Time::create(['name' => $occupation]);
        }


    }
}
