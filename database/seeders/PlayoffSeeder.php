<?php

namespace Database\Seeders;

use App\Models\Playoff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayoffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Playoff::create([
            "name"=> "Quarterfinals"
        ]) ;
        Playoff::create([
            "name"=> "Semifinals"
        ]) ;
        Playoff::create([
            "name"=> "Finals"
        ]) ;
    }
}
