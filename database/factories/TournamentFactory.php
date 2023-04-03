<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */

class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
            // Generate a Faker instance
            $faker = Faker::create();

// Generate a random timestamp between yesterday and tomorrow
            $timestamp = Carbon::yesterday()->timestamp + rand(0, Carbon::tomorrow()->timestamp - Carbon::yesterday()->timestamp);

// Create a new Carbon instance from the generated timestamp
            $fakeDate = Carbon::createFromTimestamp($timestamp);

// Use the Faker instance to format the Carbon instance as a fake date
            $fakeDateString = $faker->dateTimeBetween($fakeDate, Carbon::tomorrow())->format('Y-m-d H:i:s');
        return [
            "name" => fake()->firstNameMale ,
            "description" => fake()->text,
            "starting_date" => $fakeDateString,
//            "ending_date" => $fakeDateString,
            'game_id' => rand(1 , 3),
            'status_id' => rand(1 , 3),

        ];
    }
}
