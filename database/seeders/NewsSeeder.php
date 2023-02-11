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
            "image" => "https://cdn2.unrealengine.com/23comp-evergreens-br-social--1920x1080-22e5cd2fc82f.jpg" ,
            "title" => "FORTNITE CHAPTER 4 SEASON 1 COMPETITIVE DETAILS" ,
            "description" => "Welcome to Chapter 4 and a new competitive update. In Chapter 4 Season 1, competitive Fortnite will be continuing the Fortnite Divisional Cup weekly offerings, return to FNCS online competition, and introduce new competitive offerings such as Victory Cups, Fill Cups, Zero Build Cups, Collegiate Cups, and more.",
            "author" => "FORTNITE E-Sports ©",
            "game_id" => 3
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt42d211245192af10/6391f39e3a0e946001a48bed/image_6483441_(1).JPG?width=1600&height=900" ,
            "title" => "Save the Date for LEC Winter 2023 and Season Kickoff Tickets!" ,
            "description" => "Here’s everything you need to know about securing your tickets for our Season Kickoff event and the LEC Winter Split.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blta25074e2ab5577d0/639b28aead296f11b79af3e3/LEC23_Article_Schedule_16x9.jpg?width=1600&height=900" ,
            "title" => "The new broadcast days for the LEC and ERLs are here!" ,
            "description" => "Here’s everything you need to know about the broadcast schedule for the EMEA League Esports 2023 Season - including our three confirmed broadcast days for the LEC.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt2591e1c7b30a02bb/6390e9c0a8ba0e5eb857e863/SeasonKickOff_Header_(1).png?width=1600&height=900" ,
            "title" => "LoL Esports to Debut New Kickoff Event for 2023 Season" ,
            "description" => "Nine regional leagues will celebrate start of the new competitive year for both League of Legends Ranked Play and LoL Esports during two-day event.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte2c0dcec8472d272/636476dc2d2a144cc90497fb/GCC_Primer_Article_Header.jpg?width=519&height=" ,
            "title" => "VALORANT GAME CHANGERS CHAMPIONSHIP : EVERYTHING YOU NEED TO KNOW" ,
            "description" => "Everything you need to know about the upcoming international capstone event for Game Changers 2022.",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;
        News::create([
            "image" => "https://lh6.googleusercontent.com/U3nkcfWoB0oVaXGWW-ZlYT1a8v56M8WrgxQZeCGe0CfMAOWJ0ywzUBmwXA29scSVAheVcULqEJZUWQ47vjYQgHnOv5ZQrIadc4qQQlWDtZqLsSfrPAaTZI5uguJO2MiuLSk6Kv0MetLQ02qjcsvJLNESSiZb8r8emHCDa77X7fkiTEk6EtWiDM5rtw" ,
            "title" => "FORTNITE CHAPTER 3 SEASON 4 COMPETITIVE DETAILS" ,
            "description" => "It’s almost time for a new Fortnite Season, and with a new Season comes a new competitive update. In Chapter 3 - Season 4, the Competitive Fortnite team is shaking things up with a brand new Fortnite Divisional Cup format, an Arena Hype reset at the beginning of the Fortnite Season, Late Game Cups, Zero Build Cups, Collegiate Cups, and more!",
            "author" => "FORTNITE E-Sports ©",
            "game_id" => 3
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blt281287d5ec56a983/6391af859ec8cb5e23a5c31f/VCT_EMEA_2023_Vision_&_Format.jpg?width=1236&height=695" ,
            "title" => "VCT EMEA 2023: VISION AND FORMAT" ,
            "description" => "Discover what VCT will look like for EMEA in 2023!",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blt1b90318f7dba0ab6/637746597daea11117e06360/HEADER.jpg?width=1236&height=695" ,
            "title" => "VALORANT GAME CHANGERS EMEA 2023: VISION AND FORMAT CHANGES" ,
            "description" => "The Game Changers Championship marks the conclusion of the 2022 circuit, and we’d like to congratulate G2 Gozen on being crowned champions after pulling off the reverse sweep against Shopify Rebellion! 2023 is fast approaching and we can’t wait to share further information with you today.",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/bltcf6b03bb0948b6e3/6384e40471c75510a0ca448e/G-Loot_Clash_Recap_Header.jpg?width=1236&height=695" ,
            "title" => "G-LOOT RECAP: NEW-LOOK NAVI COME OUT ON TOP!" ,
            "description" => "Read all of the information from the off-season G-Loot Clash",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1

        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blt3957e8dc908270f5/63974c15c0d60d1e402eaecd/Red_Bull_Home_Ground_Recap.jpg?width=1236&height=695" ,
            "title" => "RED BULL HOME GROUND 2022 RECAP: 100 THIEVES REIGN SUPREME" ,
            "description" => "Join us as we look back at this year’s OFF//SEASON Red Bull Home Ground Tournament",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1

        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/bltcf7da1dba92fc111/63479c4c2a8d0a11633dd0f4/GameChangers_Announcement_Header.jpg?width=1236&height=695" ,
            "title" => "GAME CHANGERS WORLD CHAMPIONSHIP: LIVE AUDIENCE AND TICKET SALE INFORMATION" ,
            "description" => "Today we are excited to share the initial details about live audience attendance and ticket sales for Game Changers World Championship!",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1

        ]) ;
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte0d225d7775f1733/633aad608076874bc1dcf3d9/1920x1080_VCT_BME_Announcement.jpg?width=1236&height=695" ,
            "title" => "BME SUPERDOME WILL BE COMING TO CAIRO FOR THE VALORANT CHAMPIONS TOUR 2022 OFF//SEASON!" ,
            "description" => "We’re happy to announce BME Superdome is joining the VALORANT Champions Tour (VCT) 2022 Off//Season, bringing a clash between European and MENA teams to the capital of Egypt, Cairo.",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;



    }
}
