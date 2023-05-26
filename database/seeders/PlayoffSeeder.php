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
            "name"=> "Upper Quarterfinals"
        ]) ;
        Playoff::create([
            "name"=> "Lower Quarterfinals"
        ]) ;
        Playoff::create([
            "name"=> "Upper Semifinals"
        ]) ;
        Playoff::create([
            "name"=> "Lower Semifinals"
        ]) ;
        Playoff::create([
            "name"=> "Upper Finals"
        ]) ;
        Playoff::create([
            "name"=> "Lower Finals"
        ]) ;
        Playoff::create([
            "name"=> "Grand Finals"
        ]) ;
    }
}
//hello