<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'playoff_id' => rand(1 , 3),
            'game_id' => rand(1 , 3),
            'team1_score' => rand(1 , 5),
            'team2_score' => rand(1 , 5),
            'team1_id' => rand(1 , 31),
            'team2_id' => rand(1 , 31),
            'tournament_id' => rand(1 , 20),
            'live_status' => rand(0 , 1),
            "starting_date" => fake()->dateTimeThisYear,

        ];
    }
}
