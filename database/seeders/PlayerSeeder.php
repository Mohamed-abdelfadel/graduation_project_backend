<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "ShahZaM" ,
            "description" => "Shahzeb 'ShahZaM' Khan (born October 8, 1993) is an American player who is currently playing as an in-game leader for G2 Esports. He is a former Counter-Strike: Global Offensive player who is mostly known for his time in Cloud9, OpTic and Complexity Gaming.",
            "game_id" => 1,
            "team_id" => 1
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "dapr" ,
            "description" => "Michael 'dapr' Gulino (born January 1, 1999) is an American player who is currently playing for G2 Esports. He is a former professional Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 1
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png" ,
            "name" => "wippie" ,
            "description" => "Maxim 'wippie' Shepelev (born May 31, 1999) is a Russian player who is currently playing for G2 Esports. He is a retired professional Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 1
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/2560px-Flag_of_Canada.svg.png" ,
            "name" => "penny" ,
            "description" => "Erik 'penny' Penny (born January 7, 2003) is a Canadian player who is currently playing for G2 Esports. He is a former professional Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 1
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "OXY" ,
            "description" => "Francis 'OXY' Hoang (born April 30, 2005) is an American player who is currently playing for G2 Esports.",
            "game_id" => 1,
            "team_id" => 1
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "valyn" ,
            "description" => "Jacob 'valyn' Batio (born January 4, 2003) is an American player who is currently playing as an in-game leader for The Guard.",
            "game_id" => 1,
            "team_id" => 2
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "neT" ,
            "description" => "Michael 'neT' Bernet (born December 6, 2002) is an American player who is currently playing for The Guard.",
            "game_id" => 1,
            "team_id" => 2
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/2560px-Flag_of_Canada.svg.png" ,
            "name" => "JonahP" ,
            "description" => "Jonah 'JonahP' Pulice (born March 31, 2000) is a Canadian player who is currently playing for The Guard. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 2
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "trent" ,
            "description" => "Trent 'trent' Cairns (born December 9, 2004) is an American player who currently plays for The Guard.",
            "history" => "",
            "game_id" => 1,
            "team_id" => 2
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "tex" ,
            "description" => "Ian 'tex' Botsch (born August 2, 1999) is an American player who is currently playing for The Guard.",
            "game_id" => 1,
            "team_id" => 2
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/48/1648-004-A33B72D8/Flag-Indonesia.jpg" ,
            "name" => "mindfreak" ,
            "description" => "Aaron 'mindfreak' Leonhart (born October 4, 1999) is an Indonesian player who currently plays for Paper Rex. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 3
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/48/1648-004-A33B72D8/Flag-Indonesia.jpg" ,
            "name" => "f0rsakeN" ,
            "description" => "Jason 'f0rsakeN' Susanto (born March 25, 2004) is an Indonesian player who currently plays for Paper Rex. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 3
        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/48/1648-004-A33B72D8/Flag-Indonesia.jpg" ,
            "name" => "Benkai" ,
            "description" => "Benedict 'Benkai' Tan (born November 10, 1996) is a Singaporean player who currently plays for Paper Rex. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 3

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Flag_of_Malaysia.svg/2560px-Flag_of_Malaysia.svg.png" ,
            "name" => "d4v41" ,
            "description" => "Khalish 'd4v41' Rusyaidee (born October 14, 1998) is an Malaysian player who currently plays for Paper Rex. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 3

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Singapore.svg/1200px-Flag_of_Singapore.svg.png" ,
            "name" => "Jinggg" ,
            "description" => "Wang 'Jinggg' Jing Jie (born July 29, 2003) is an Singaporean player who currently plays for Paper Rex.",
            "game_id" => 1,
            "team_id" => 3

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/38/4038-004-111388C2/Flag-Thailand.jpg" ,
            "name" => "CigaretteS" ,
            "description" => "Patiphan 'CigaretteS' Posri is a Thai player who is currently playing for Paper Rex. He is a former Counter-Strike: Global Offensive and PUBG player known for playing on Signature Gaming and Made in Thailand.",
            "game_id" => 1,
            "team_id" => 3

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png" ,
            "name" => "something" ,
            "description" => "Ilya 'something' Petrov (born February 11, 2002) is a Russian player who is currently playing for Paper Rex.",
            "game_id" => 1,
            "team_id" => 3

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "Boaster" ,
            "description" => "Jake 'Boaster' Howlett (born May 25, 1995) is a British player who is currently playing as an in-game leader for Fnatic. He is a former Counter-Strike: Global Offensive player who played for various different British rosters.",
            "game_id" => 1,
            "team_id" => 4

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png" ,
            "name" => "Derke" ,
            "description" => "Nikita 'Derke' Sirmitev (born February 6, 2003) is a Finnish-Russian player who currently plays for Fnatic. He is a former Counter-Strike: Global Offensive player known for his time in SkitLite and KOVA Esports.",
            "game_id" => 1,
            "team_id" => 4

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/800px-Flag_of_Turkey.svg.png" ,
            "name" => "Alfajer" ,
            "description" => "Emir 'Alfajer' Beder (born June 10, 2005) is a Turkish player who is currently playing for Fnatic.",
            "game_id" => 1,
            "team_id" => 4

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/4/4c/Flag_of_Sweden.svg/1200px-Flag_of_Sweden.svg.png" ,
            "name" => "Leo" ,
            "description" => "Leo 'Leo' Jannesson (born December 15, 2003) is a Swedish player who is currently playing for Fnatic",
            "game_id" => 1,
            "team_id" => 4

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png" ,
            "name" => "Chronicle" ,
            "description" => "Timofey 'Chronicle' Khromov (born August 16, 2002) is a Russian player who is currently playing for Fnatic.",
            "game_id" => 1,
            "team_id" => 4

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/1200px-Flag_of_Poland.svg.png" ,
            "name" => "kamyk" ,
            "description" => "Maks 'kamyk' Rychlewski (born July 2, 2003) is a Polish player who is currently playing for Fnatic.",
            "game_id" => 1,
            "team_id" => 4

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" ,
            "name" => "soulcas" ,
            "description" => "Dom 'soulcas' Sulcas (born January 2, 2000) is a British player who currently plays for Team Liquid. He is a former Counter-Strike: Global Offensive player known for his time in London Esports and Fierce Esports.",
            "game_id" => 1,
            "team_id" => 5

        ]) ;
        Player::create([
            "image" => "https://www.vlr.gg/img/icons/flags/16/fi.png" ,
            "name" => "Jamppi" ,
            "description" => "Elias 'Jamppi' Olkkonen (born July 22, 2001) is a Finnish player who currently plays for Team Liquid. He is a former Counter-Strike: Global Offensive player who was most known for his time at ENCE.",
            "game_id" => 1,
            "team_id" => 5

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flag_of_Kazakhstan_%283-2%29.svg/2560px-Flag_of_Kazakhstan_%283-2%29.svg.png" ,
            "name" => "dimasick" ,
            "description" => "Dmitriy 'dimasick' Matvienko (born July 6, 1996) is a Kazakhstani player who is currently playing for Team Liquid. He is a former Counter-Strike: Global Offensive player known for his time on AVANGAR and pro100.",
            "game_id" => 1,
            "team_id" => 5

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png" ,
            "name" => "nAts" ,
            "description" => "Ayaz 'nAts' Akhmetshin (born July 1, 2002) is a Russian player who is currently playing for Team Liquid. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 5

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png" ,
            "name" => "Redgar" ,
            "description" => "Igor 'Redgar' Vlasov (born October 17, 1997) is a Russian player who is currently playing as an in-game leader for Team Liquid.",
            "game_id" => 1,
            "team_id" => 5

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/4/4c/Flag_of_Sweden.svg/1200px-Flag_of_Sweden.svg.png" ,
            "name" => "Sayf" ,
            "description" => "Saif 'Sayf' Jibraeel (born January 1, 2001) is a Swedish player who is currently playing for Team Liquid.",
            "game_id" => 1,
            "team_id" => 5

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png" ,
            "name" => "Harmii" ,
            "description" => "Nico 'Harmii' Harms is a German player who is currently playing as a substitute for Team Liquid. He is a former Fortnite player and streamer known for his time in Team Liquid.",
            "game_id" => 1,
            "team_id" => 5

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/49/1949-004-8818300C/Flag-South-Korea.jpg" ,
            "name" => "stax" ,
            "description" => "Kim 'stax' Gu-taek (born February 16, 2000) is a South Korean player who currently plays for DRX. He is a former professional Counter-Strike: Global Offensive player who was most known for his time in MVP PK.",
            "game_id" => 1,
            "team_id" => 6

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/49/1949-004-8818300C/Flag-South-Korea.jpg" ,
            "name" => "Rb" ,
            "description" => "Goo 'Rb' Sang-min is a South Korean player who currently plays for DRX. He is a former professional Counter-Strike: Global Offensive player who was most known for his time in MVP PK.",
            "game_id" => 1,
            "team_id" => 6

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/49/1949-004-8818300C/Flag-South-Korea.jpg" ,
            "name" => "Zest" ,
            "description" => "Kim 'Zest' Gi-seok (born December 27, 2000) is a South Korean player who currently plays for DRX. He is a former professional Counter-Strike: Global Offensive player who was most known for his time in GOSU.",
            "game_id" => 1,
            "team_id" => 6

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/49/1949-004-8818300C/Flag-South-Korea.jpg" ,
            "name" => "BuZz" ,
            "description" => "Byung-chul 'BuZz' Yu (born January 13, 2003) is a South Korean player who currently plays for DRX.",
            "game_id" => 1,
            "team_id" => 6

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/49/1949-004-8818300C/Flag-South-Korea.jpg" ,
            "name" => "MaKo" ,
            "description" => "Kim 'MaKo' Myeong-kwan (born January 15, 2002) is a Korean player who currently plays for DRX.",
            "game_id" => 1,
            "team_id" => 6

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/49/1949-004-8818300C/Flag-South-Korea.jpg" ,
            "name" => "Foxy9" ,
            "description" => "Jung 'Foxy9' Jae-sung (born November 20, 2004) (formerly known as 'SeolHwa') is a South Korean player who currently plays for DRX",
            "game_id" => 1,
            "team_id" => 6

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "aspas" ,
            "description" => "Erick 'aspas' Santos (born June 15, 2003) is a Brazilian player who is currently playing for LOUD.",
            "game_id" => 1,
            "team_id" => 7

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "Less" ,
            "description" => "Felipe 'Less' Basso (born February 24, 2005) is a Brazilian player who is currently playing for LOUD.",
            "game_id" => 1,
            "team_id" => 7

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/69/5869-004-7D75CD05/Flag-Argentina.jpg" ,
            "name" => "Saadhak" ,
            "description" => "Matias 'Saadhak' Delipetro (born March 8, 1997) is an Argentine player who is currently playing for LOUD.",
            "game_id" => 1,
            "team_id" => 7

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "cauanzin" ,
            "description" => "Cauan 'cauanzin' Pereira (born August 2, 2005) is a Brazilian player who is currently playing for LOUD.",
            "game_id" => 1,
            "team_id" => 7

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "tuyz" ,
            "description" => "Arthur 'tuyz' Vieira (born August 3, 2003) is a Brazilian player who is currently playing for LOUD.",
            "game_id" => 1,
            "team_id" => 7

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/2560px-Flag_of_Canada.svg.png" ,
            "name" => "Marved" ,
            "description" => "Jimmy 'Marved' Nguyen (born February 24, 2000) is a Canadian player who is currently playing for Sentinels. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 8

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/2560px-Flag_of_Canada.svg.png" ,
            "name" => "FNS" ,
            "description" => "Pujan 'FNS' Mehta (born March 19, 1992) is a Canadian player who is currently playing as an in-game leader for NRG. He is a former Counter-Strike: Global Offensive player",
            "game_id" => 1,
            "team_id" => 8

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "yay" ,
            "description" => "Jaccob 'yay' Whiteaker (born September 9, 1998) is an American player who is currently playing for Disguised. He is a former Counter-Strike: Global Offensive player." ,
            "game_id" => 1,
            "team_id" => 8

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "Victor" ,
            "description" => "Victor 'Victor' Wong (born September 14, 1996) is an American player who is currently playing for NRG. He is a former Counter-Strike: Global Offensive player known for his time on Swole Patrol and eUnited.",
            "game_id" => 1,
            "team_id" => 8

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" ,
            "name" => "crashies" ,
            "description" => "Austin 'crashies' Roberts (born December 20, 1997) is an American player who is currently playing for NRG.",
            "game_id" => 1,
            "team_id" => 8

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/38/4038-004-111388C2/Flag-Thailand.jpg" ,
            "name" => "xZe" ,
            "description" => "Tanawat 'xZe' Kannark is a Thai player who is currently playing for XERXIA.",
            "game_id" => 1,
            "team_id" => 9

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/800px-Flag_of_Japan.svg.png" ,
            "name" => "LBY" ,
            "description" => "Eisuke 'LBY' Kuraoka is a Japanese player who is currently playing for XERXIA.",
            "game_id" => 1,
            "team_id" => 9

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/38/4038-004-111388C2/Flag-Thailand.jpg" ,
            "name" => "aLerT" ,
            "description" => "Wattanachok 'aLerT' Yingnakorn is a Thai player who is currently playing for XERXIA.",
            "game_id" => 1,
            "team_id" => 9

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/38/4038-004-111388C2/Flag-Thailand.jpg" ,
            "name" => "CigaretteS" ,
            "description" => "Patiphan 'CigaretteS' Posri is a Thai player who is currently playing for Paper Rex. He is a former Counter-Strike: Global Offensive and PUBG player known for playing on Signature Gaming and Made in Thailand.",
            "game_id" => 1,
            "team_id" => 9

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png" ,
            "name" => "something" ,
            "description" => "Ilya 'something' Petrov (born February 11, 2002) is a Russian player who is currently playing for Paper Rex.",
            "game_id" => 1,
            "team_id" => 9

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/800px-Flag_of_Japan.svg.png" ,
            "name" => "Laz" ,
            "description" => "Koji 'Laz' Ushida (born November 26, 1995) is a Japanese player who is currently playing for ZETA DIVISION.",
            "game_id" => 1,
            "team_id" => 10

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/800px-Flag_of_Japan.svg.png" ,
            "name" => "crow" ,
            "description" => "Tomoaki 'crow' Maruoka (born November 28, 1997) is a Japanese player who is currently playing for ZETA DIVISION.",
            "game_id" => 1,
            "team_id" => 10

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/800px-Flag_of_Japan.svg.png" ,
            "name" => "Dep" ,
            "description" => "Yuma 'Dep' Hashimoto (born December 4, 2000) is a Japanese player who currently plays for ZETA DIVISION. Prior to playing VALORANT, he was a professional Overwatch and PUBG player, and represented his country in the Overwatch World Cup 2018 and PUBG Nations Cup 2019, respectively.",
            "game_id" => 1,
            "team_id" => 10

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/800px-Flag_of_Japan.svg.png" ,
            "name" => "TENNN" ,
            "description" => "Tenta 'TENNN' Asai (born October 19, 2001) is a Japanese player who currently plays for ZETA DIVISION. Prior to playing VALORANT, he was a professional Overwatch player, and represented his country in the Overwatch World Cup 2019.",
            "game_id" => 1,
            "team_id" => 10

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/800px-Flag_of_Japan.svg.png" ,
            "name" => "SugarZ3ro" ,
            "description" => "Shota 'SugarZ3ro' Watanabe (born March 18, 2003) is a Japanese player who currently plays for ZETA DIVISION. He is a former Rainbow Six Siege player.",
            "game_id" => 1,
            "team_id" => 10

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/800px-Flag_of_Japan.svg.png" ,
            "name" => "barce" ,
            "description" => "Ryo 'barce' Takebayashi (born August 22, 1996) is a Japanese player who is currently playing for ZETA DIVISION.",
            "game_id" => 1,
            "team_id" => 10

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/69/5869-004-7D75CD05/Flag-Argentina.jpg" ,
            "name" => "Klaus" ,
            "description" => "Nicolas 'Klaus' Ferrari (born April 4, 2001) is an Argentinian player who currently plays for KRÜ Esports.",
            "game_id" => 1,
            "team_id" => 11

        ]) ;

        Player::create([
            "image" => "https://cdn.britannica.com/85/7485-004-00B07230/Flag-Chile.jpg" ,
            "name" => "NagZ" ,
            "description" => "Juan Pablo 'NagZ' Lopez Miranda is a Chilean player who currently plays for KRÜ Esports.",
            "game_id" => 1,
            "team_id" => 11

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/68/7668-004-08492AB7/Flag-Colombia.jpg" ,
            "name" => "Daveeys" ,
            "description" => "Santiago 'Daveeys' Ruiz (born September 2, 2000) is a Colombian player who is currently playing for KRÜ Esports. He is an ex-professional Counter-Strike: Global Offensive player known for his time in Infinity Esports",
            "game_id" => 1,
            "team_id" => 11

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/85/7485-004-00B07230/Flag-Chile.jpg" ,
            "name" => "Melser" ,
            "description" => "Marco 'Melser' Amaro (born May 12, 1995) is a Chilean player who is currently playing for KRÜ Esports.",
            "game_id" => 1,
            "team_id" => 11

        ]) ;
        Player::create([
            "image" => "https://cdn.britannica.com/85/7485-004-00B07230/Flag-Chile.jpg" ,
            "name" => "keznit" ,
            "description" => "Angelo 'keznit' Mori (born August 14, 2001) is a Chilean player who is currently playing for KRÜ Esports.",
            "game_id" => 1,
            "team_id" => 11

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "axeddy" ,
            "description" => "Carlos 'axeddy' Galvão (born June 11, 2003) is a Brazilian player who is currently playing for KRÜ Esports.",
            "game_id" => 1,
            "team_id" => 11

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "xand" ,
            "description" => "Alexandre 'xand' Zizi (born April 11, 1995) is a Brazilian player who is currently playing for 00 Nation.",
            "game_id" => 1,
            "team_id" => 12

        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "Jonn" ,
            "description" => "Walney 'Jonn' Reis is a Brazilian player who last played for RED Canids.",
            "game_id" => 1,
            "team_id" => 12
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "bezn1" ,
            "description" => "Gabriel 'bezn1' Costa is a Brazilian player who is currently playing for 00 Nation. He is a former Point Blank player.",
            "game_id" => 1,
            "team_id" => 12
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "cauanzin" ,
            "description" => "Cauan 'cauanzin' Pereira (born August 2, 2005) is a Brazilian player who is currently playing for LOUD.",
            "game_id" => 1,
            "team_id" => 12
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "FLUYR" ,
            "description" => "Vinícius 'FLUYR' Menegatti is a Brazilian coach who previously coached for INGAMING Esports. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 12
        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/800px-Flag_of_Brazil.svg.png" ,
            "name" => "FLUYR" ,
            "description" => "Vinícius 'FLUYR' Menegatti is a Brazilian coach who previously coached for INGAMING Esports. He is a former Counter-Strike: Global Offensive player.",
            "game_id" => 1,
            "team_id" => 12
        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Maged" ,
            "description" => "Maged 'Maged' Marwan (born January 14, 2001) is an Egyptian player who is currently playing as a Toplaner for RA'AD.",
            "game_id" => 1,
            "team_id" => 34
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Flag_of_Denmark_fixed.svg/225px-Flag_of_Denmark_fixed.svg.png" ,
            "name" => "Skude" ,
            "description" => "Andreas 'Skude' Skude (born April 21, 1999) is a Danish player who is currently playing as a Jungler for RA'AD.",
            "game_id" => 1,
            "team_id" => 34
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Mangoo" ,
            "description" => "Mohamed 'Mangoo' Hossam (born January 15, 2004) is an Egyptian player who is currently playing as a substitute Botlaner for RA'AD.",
            "game_id" => 1,
            "team_id" => 34
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Nufall" ,
            "description" => "Abdallah 'Nufall' Mohamed (born December 1, 2001) is an Egyptian player who is currently playing as a substitute jg for RA'AD.",
            "game_id" => 1,
            "team_id" => 34
        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png" ,
            "name" => "Satorius" ,
            "description" => "Max 'Satorius' Günther (born April 12, 1994) is a German player who is currently playing as a Toplaner for Geekay Esports.",
            "game_id" => 1,
            "team_id" => 33
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/4/4c/Flag_of_Sweden.svg/1200px-Flag_of_Sweden.svg.png" ,
            "name" => "Viking" ,
            "description" => "Anton 'Viking' Andersson (born September 14, 1997) is a Swedish player who is currently playing as a Jungler for Geekay Esports.",
            "game_id" => 1,
            "team_id" => 33
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/255px-Flag_of_Lebanon.svg.png" ,
            "name" => "Giyuu" ,
            "description" => "Ahmad 'Giyuu' Charif (born November 12, 2001) is a Lebanese player who is currently playing as a Midlaner for Geekay Esports.",
            "game_id" => 1,
            "team_id" => 33
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/8/8c/Flag_of_Algeria_%28color_shades_variant%29.svg" ,
            "name" => "Rin" ,
            "description" => "Khalil 'Rin' Sahraoui (born November 5, 2002) is an Algerian player who is currently playing as a Botlaner for Geekay Esports.",
            "game_id" => 1,
            "team_id" => 33
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/2560px-Flag_of_Jordan.svg.png" ,
            "name" => "DeKap" ,
            "description" => "Waleed 'DeKap' Ismail is a Jordanian player who is currently playing as a Support for Geekay Esports.",
            "game_id" => 1,
            "team_id" => 33
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/2000px-Flag_of_Saudi_Arabia.svg.png" ,
            "name" => "Wufo" ,
            "description" => "Nawaf 'Wufo' Alkhowaiter is a Saudi Arabian player who is currently playing as a Toplaner for Triple Esports.",
            "game_id" => 1,
            "team_id" => 35
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/2000px-Flag_of_Saudi_Arabia.svg.png" ,
            "name" => "Ajwad" ,
            "description" => "Ajwad 'Ajwad' is a Saudi Arabian player who is currently playing as a Jungler for Triple Esports.",
            "game_id" => 1,
            "team_id" => 35
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/2000px-Flag_of_Saudi_Arabia.svg.png" ,
            "name" => "Mimic" ,
            "description" => "Nawaf 'Mimic' Al Salem is a Saudi Arabian player who is currently playing as a Botlaner for Triple Esports.",
            "game_id" => 1,
            "team_id" => 35
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "LickMyHeal" ,
            "description" => "Omar 'LickMyHeal' Ashra is an Egyptian player who is currently playing as a Support for Triple Esports.",
            "game_id" => 1,
            "team_id" => 35
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" ,
            "name" => "kaSing" ,
            "description" => "Raymond 'kaSing' Tsang (born December 8, 1993) is a British/Hong Kong player who is currently playing as a Support for Triple Esports.",
            "game_id" => 1,
            "team_id" => 35
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Murph" ,
            "description" => "Muhammed 'Murph' Fathy is an Egyptian player who is currently playing as a Toplaner for 3BL Esports.",
            "game_id" => 1,
            "team_id" => 36
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "1DarKNess" ,
            "description" => "Sherif '1DarKNess' Hesham is an Egyptian player who is currently playing as a substitute Toplaner for 3BL Esports.",
            "game_id" => 1,
            "team_id" => 36
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Dama" ,
            "description" => "Hussein 'Dama' Osama is an Egyptian player who is currently playing as a substitute Botlaner for 3BL Esports.",
            "game_id" => 1,
            "team_id" => 36
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/2560px-Flag_of_Tunisia.svg.png" ,
            "name" => "Dean" ,
            "description" => "Haithem 'Dean' Attia is a Tunisian player who is currently playing as a Jungler for 3BL Esports.",
            "game_id" => 1,
            "team_id" => 36
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/2560px-Flag_of_Tunisia.svg.png" ,
            "name" => "Juggernaut" ,
            "description" => "Med 'Juggernaut' Khadraoui is a Tunisian player who is currently playing as a Midlaner for 3BL Esports.",
            "game_id" => 1,
            "team_id" => 36
        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Boda" ,
            "description" => "Mohamed 'Boda' Yahia is an Egyptian player who is currently playing as a Toplaner for Anubis Gaming.",
            "game_id" => 1,
            "team_id" => 37
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Annie Bot" ,
            "description" => "Marwan 'Annie Bot' Ashraf is an Egyptian player who is currently playing as a Midlaner for Anubis Gaming.",
            "game_id" => 1,
            "team_id" => 37
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/800px-Flag_of_Egypt.svg.png" ,
            "name" => "Fev3r" ,
            "description" => "Khaled 'Fev3r' Noshokaty is an Egyptian player who is currently playing as a Support for Anubis Gaming.",
            "game_id" => 1,
            "team_id" => 37
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/800px-Flag_of_Turkey.svg.png" ,
            "name" => "Black" ,
            "description" => "Murat 'Black' Ayaz is a Turkish player who is currently playing as a Botlaner for Anubis Gaming.",
            "game_id" => 1,
            "team_id" => 37
        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Morocco_%28large_stroke%29.svg/1200px-Flag_of_Morocco_%28large_stroke%29.svg.png" ,
            "name" => "Nova" ,
            "description" => "Mehdi 'Nova' Ghalimi is a Moroccan player who is currently playing as a Support for Fox Gaming.",
            "game_id" => 1,
            "team_id" => 38
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Morocco_%28large_stroke%29.svg/1200px-Flag_of_Morocco_%28large_stroke%29.svg.png" ,
            "name" => "Akazan" ,
            "description" => "Ali 'Akazan' Mkharbeche (born March 1, 2000) is a Moroccan player who is currently playing as a substitute Toplaner for Fox Gaming.",
            "game_id" => 1,
            "team_id" => 38

        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/2560px-Flag_of_Tunisia.svg.png" ,
            "name" => "Lokmays" ,
            "description" => "Aymen 'Lokmays' Jadallah is a Tunisian player who is currently playing as a substitute Support for GnG Esports.",
            "game_id" => 1,
            "team_id" => 39
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/2560px-Flag_of_Tunisia.svg.png" ,
            "name" => "Skream" ,
            "description" => "Youssef 'Skream' Abdellatif is a Tunisian player who is currently playing as a substitute Botlaner for GnG Esports.",
            "game_id" => 1,
            "team_id" => 39
        ]) ;

        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/2560px-Flag_of_the_United_Arab_Emirates.svg.png" ,
            "name" => "Rust" ,
            "description" => "Khalifa 'Rust' Al-Dhaheri (born October 19, 1999) is an Emirati player who is currently playing as a Botlaner for Nigma Galaxy MENA.",
            "game_id" => 1,
            "team_id" => 39
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/2560px-Flag_of_Jordan.svg.png" ,
            "name" => "KlownZ" ,
            "description" => "Mohammad 'KlownZ' Khalailah (born October 19, 1999) is a Jordanian player who is currently playing as a Support for Nigma Galaxy MENA.",
            "game_id" => 1,
            "team_id" => 39
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/800px-Flag_of_Turkey.svg.png" ,
            "name" => "Faith" ,
            "description" => "İnanç 'Faith' Berber is a Turkish player who is currently playing as a Jungler for GnG Esports.",
            "game_id" => 1,
            "team_id" => 40
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/2560px-Flag_of_Tunisia.svg.png" ,
            "name" => "Koussay" ,
            "description" => "Koussay 'Koussay' Soltani (born May 3, 2005) is a Tunisian player who is currently playing as a Midlaner for GnG Esports.",
            "game_id" => 1,
            "team_id" => 40
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/2560px-Flag_of_Tunisia.svg.png" ,
            "name" => "Xicor" ,
            "description" => "Fares 'Xicor' Saidana is a Tunisian player who is currently playing as a Botlaner for GnG Esports.",
            "game_id" => 1,
            "team_id" => 40
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/2000px-Flag_of_Saudi_Arabia.svg.png" ,
            "name" => "Mishal" ,
            "description" => "Mishal 'Mishal' Albarrak is a Saudi Arabian player who is currently playing as a Support for GnG Esports.",
            "game_id" => 1,
            "team_id" => 40
        ]) ;
        Player::create([
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Flag_of_Denmark_fixed.svg/225px-Flag_of_Denmark_fixed.svg.png" ,
            "name" => "Postkassen" ,
            "description" => "Johannes 'Postkassen' Thuesen is a Danish player who is currently playing as a Support for GnG Esports.",
            "game_id" => 1,
            "team_id" => 40
        ]) ;

    }
}
