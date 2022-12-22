<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\news ;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte2c0dcec8472d272/636476dc2d2a144cc90497fb/GCC_Primer_Article_Header.jpg?width=519&height=" ,
            "title" => "VALORANT GAME CHANGERS CHAMPIONSHIP : EVERYTHING YOU NEED TO KNOW" ,
            "description" => "Everything you need to know about the upcoming international capstone event for Game Changers 2022.",
            "author" => "VALORANT E-Sports ©",
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt42d211245192af10/6391f39e3a0e946001a48bed/image_6483441_(1).JPG?width=1600&height=900" ,
            "title" => "Save the Date for LEC Winter 2023 and Season Kickoff Tickets!" ,
            "description" => "Here’s everything you need to know about securing your tickets for our Season Kickoff event and the LEC Winter Split.",
            "author" => "League of Legends E-Sports ©",
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blta25074e2ab5577d0/639b28aead296f11b79af3e3/LEC23_Article_Schedule_16x9.jpg?width=1600&height=900" ,
            "title" => "The new broadcast days for the LEC and ERLs are here!" ,
            "description" => "Here’s everything you need to know about the broadcast schedule for the EMEA League Esports 2023 Season - including our three confirmed broadcast days for the LEC.",
            "author" => "League of Legends E-Sports ©",
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt2591e1c7b30a02bb/6390e9c0a8ba0e5eb857e863/SeasonKickOff_Header_(1).png?width=1600&height=900" ,
            "title" => "LoL Esports to Debut New Kickoff Event for 2023 Season" ,
            "description" => "Nine regional leagues will celebrate start of the new competitive year for both League of Legends Ranked Play and LoL Esports during two-day event.",
            "author" => "League of Legends E-Sports ©",
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte2c0dcec8472d272/636476dc2d2a144cc90497fb/GCC_Primer_Article_Header.jpg?width=519&height=" ,
            "title" => "VALORANT GAME CHANGERS CHAMPIONSHIP : EVERYTHING YOU NEED TO KNOW" ,
            "description" => "Everything you need to know about the upcoming international capstone event for Game Changers 2022.",
            "author" => "VALORANT E-Sports ©",
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte2c0dcec8472d272/636476dc2d2a144cc90497fb/GCC_Primer_Article_Header.jpg?width=519&height=" ,
            "title" => "VALORANT GAME CHANGERS CHAMPIONSHIP : EVERYTHING YOU NEED TO KNOW" ,
            "description" => "Everything you need to know about the upcoming international capstone event for Game Changers 2022.",
            "author" => "VALORANT E-Sports ©",
        ]) ;


    }
}
