<?php

namespace Database\Factories;

use Carbon\CarbonInterval;
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

// Generate a random number of seconds between yesterday and tomorrow
        $seconds = rand(0, CarbonInterval::day()->seconds * 2);

// Create a new Carbon instance from yesterday and add the random number of seconds
        $fakeDate = Carbon::yesterday()->addSeconds($seconds);

// Use the Faker instance to format the Carbon instance as a fake date
        $fakeDateString = $faker->dateTimeBetween($fakeDate, Carbon::tomorrow())->format('Y-m-d H:i:s');
        return [
            "name" => fake()->firstNameMale ,
            "description" => fake()->text,
            "starting_date" => $fakeDateString,
            'game_id' => rand(1 , 3),
            'status_id' => rand(1 , 3),

        ];
    }
}
