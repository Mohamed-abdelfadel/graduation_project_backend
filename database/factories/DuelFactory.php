<?php

namespace Database\Factories;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Duel>
 */
class DuelFactory extends Factory
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
            'playoff_id' => rand(1 , 3),
            'game_id' => rand(1 , 3),
            'team1_score' => rand(1 , 5),
            'team2_score' => rand(1 , 5),
            'team1_id' => rand(1 , 31),
            'team2_id' => rand(1 , 31),
            'tournament_id' => rand(1 , 8),
            "starting_date" => $fakeDateString,
            'status_id' => rand(1 , 3)

        ];
    }
}
