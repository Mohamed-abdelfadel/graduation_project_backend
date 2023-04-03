<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game_news;
use App\Models\Tournament;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoleSeeder::class,
            GameSeeder::class ,
            GameNewsSeeder::class,
            PlayoffSeeder::class,
            StatusSeeder::class,
            TournamentSeeder::class,
            TournamentNewsSeeder::class,
            TeamSeeder::class,
            PlayerSeeder::class,
            DuelSeeder::class,
//            ResultSeeder::class,



        ]);
    }
}
