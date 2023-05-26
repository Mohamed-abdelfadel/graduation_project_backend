<?php

namespace Database\Seeders;

use App\Models\Game_news;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt42d211245192af10/6391f39e3a0e946001a48bed/image_6483441_(1).JPG" ,
            "title" => "Save the Date for LEC Winter 2023 and Season Kickoff Tickets!" ,
                "description" => "Here’s everything you need to know about securing your tickets for our Season Kickoff event and the LEC Winter Split.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blta25074e2ab5577d0/639b28aead296f11b79af3e3/LEC23_Article_Schedule_16x9.jpg" ,
            "title" => "The new broadcast days for the LEC and ERLs are here!" ,
            "description" => "Here’s everything you need to know about the broadcast schedule for the EMEA League Esports 2023 Season - including our three confirmed broadcast days for the LEC.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt2591e1c7b30a02bb/6390e9c0a8ba0e5eb857e863/SeasonKickOff_Header_(1).png" ,
            "title" => "LoL Esports to Debut New Kickoff Event for 2023 Season" ,
            "description" => "Nine regional leagues will celebrate start of the new competitive year for both League of Legends Ranked Play and LoL Esports during two-day event.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte7ec112987ac0ba4/64464cf27ae5822b2414b91d/GC_Webheader_10.04_v3.jpg" ,
            "title" => "VCT GAME CHANGERS EMEA STAGE 1 2023: DATES, FORMAT, TEAMS, AND HOW TO WATCH" ,
            "description" => "I hope you’re ready because following 5 days of open qualifiers, Stage 1 of VCT Game Changers EMEA is set to kick off with a bang! With 5 of the 16 available places occupied by invited teams, the competition for the remaining 11 was fiercely fought by 128 sets of agents each eager to prove they deserved a spot, in what we already know is going to be an exciting year for the Game Changers circuit. Read on for all the details regarding dates, format, teams, and how to watch the games!
VCT Game Changers EMEA 2023: Dates & Format
Stage 1 will be starting on April 24th and will see the 16 teams split into 2 groups of 8. Group Stage matches will then take place on the following match days:
Week 1 April 24th-26th
Week 2 May 1st-2nd
Week 3 May 8th-9th
For the group phase of Stage 1, all matches will have clean feeds available for teams and influencers to host watch parties - please keep an eye on our socials for the full list of hosts! Group stage games start at 6 PM CEST, where 4 games will be played before the next set of 4 take place at 9 PM CEST.
The Playoffs of Stage 1 will be broadcast live on our official channels, and we are proud to offer streams in English, Spanish, Turkish, French, Arabic, German, Polish, Czech, Slovakian, Finnish, Hungarian, Italian, and Ukrainian during these games.",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;
        Game_news::create([
            "image" => "" ,
            "title" => "VCT EMEA 2023: VISION AND FORMAT" ,
            "description" => "Discover what VCT will look like for EMEA in 2023!",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blt1b90318f7dba0ab6/637746597daea11117e06360/HEADER.jpg" ,
            "title" => "VALORANT GAME CHANGERS EMEA 2023: VISION AND FORMAT CHANGES" ,
            "description" => "The Game Changers Championship marks the conclusion of the 2022 circuit, and we’d like to congratulate G2 Gozen on being crowned champions after pulling off the reverse sweep against Shopify Rebellion! 2023 is fast approaching and we can’t wait to share further information with you today.",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/bltcf6b03bb0948b6e3/6384e40471c75510a0ca448e/G-Loot_Clash_Recap_Header.jpg" ,
            "title" => "G-LOOT RECAP: NEW-LOOK NAVI COME OUT ON TOP!" ,
            "description" => "Read all of the information from the off-season G-Loot Clash",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1

        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blt3957e8dc908270f5/63974c15c0d60d1e402eaecd/Red_Bull_Home_Ground_Recap.jpg" ,
            "title" => "RED BULL HOME GROUND 2022 RECAP: 100 THIEVES REIGN SUPREME" ,
            "description" => "Join us as we look back at this year’s OFF//SEASON Red Bull Home Ground Tournament",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1

        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blt36f2de6dc35403d5/6462a047f5568397abe00690/1._Challengers_Ascension_Header.jpg" ,
            "title" => "CHALLENGERS ASCENSION IS COMING!" ,
            "description" => "Last year we shared that Challengers will culminate in the three Ascension tournaments that will promote three teams for the 2024 season! Promoted teams will have the opportunity to prove themselves within the International Leagues during the VCT season, receive similar league benefits, and an equal chance to qualify into Masters and Champions. Today we are excited to share that all three Ascension Tournaments will conclude on LAN and in front of live audiences.
            Immediately after the conclusion of Masters, three Challengers Ascension tournaments will kick off, featuring the best teams from within the Pacific, EMEA, and Americas regions. More than twenty Challengers Leagues have been underway across the world in 2023, narrowing down hundreds of teams to the very best.
            This year more than twenty Challenger Leagues provided organized competitions that helped develop the next generation of VALORANT talent. A robust Challenger ecosystem is imperative to ensuring the most talented teams and pros in esports select VALORANT as the game where they dedicate their time and effort. Ascension represents the culmination of our first ever Challengers Season and we think this tournament series has the potential to become one of the most exciting events on our calendar. We’re excited to share these details with all of you and we’ll be listening closely to hear your thoughts on the tournament.",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1

        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte0d225d7775f1733/633aad608076874bc1dcf3d9/1920x1080_VCT_BME_Announcement.jpg" ,
            "title" => "BME SUPERDOME WILL BE COMING TO CAIRO FOR THE VALORANT CHAMPIONS TOUR 2022 OFF//SEASON!" ,
            "description" => "We’re happy to announce BME Superdome is joining the VALORANT Champions Tour (VCT) 2022 Off//Season, bringing a clash between European and MENA teams to the capital of Egypt, Cairo. The top 6 teams in the MENA region will be facing off against 2 of the very best from Europe for a chance to be crowned winners and lift the Superdome trophy in front of thousands of fans! Read on to find out more about the tournament’s format, dates, and the teams attending.
Live from Cairo, the BME Superdome will be running from October 16-22, and kicks off with all eight teams participating in a singular Bo1 round robin group with each game available to watch through BME’s Twitch channel. The top 4 teams will qualify for the Grand Finals, but any team thinking of starting off slowly will have to think again, as placing 4th will leave you with a mountain to climb. The 1st and 2nd finishers from the group stage immediately qualify for the final and semi-final respectively with the 3rd and 4th teams having to face off against each other to have any chance of progressing.
The Grand Finals will be live streamed and played in front of a live audience at Cairo Stadium’s Indoor Hall, and with capacity for more than ten thousand people there’s definitely a seat for you! Each of the Grand Finals matches will be Bo3 so those watching on for the final day certainly won’t be lacking for top-tier VALORANT entertainment!
Participating Teams:
Geekay Esports (MENA)
NASR Esports (MENA)
Piercer Esports (MENA)
Team Falcons (MENA)
Team RA’AD (MENA)
YaLLa Esports (MENA)
Acend (EMEA)
Fnatic (EMEA)",
            "author" => "VALORANT E-Sports ©",
            "game_id" => 1
        ]) ;



        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt8d44e3c9a55a91c4/645e098a30b83920f9fd4de8/LEC_Summer_Split_Season_Finals_dates_and_ticketing.jpg" ,
            "title" => "Full dates revealed for 2023 LEC Summer Split and 2023 LEC Season Finals - with tickets available soon!" ,
            "description" => "While we know that the action at MSI 2023 is taking up the hearts and minds of LoL Esports fans, we’ve got some exciting LEC news coming your way – the 2023 LEC Summer Split will kick-off on June 17!
The split will run from June 17 - July 30, with a one-week break in the first week of July as we take our annual Riot Mid-Year Break. Reigning 2023 LEC Spring Split champions MAD Lions will look to claim back-to-back titles, while the rest of the league will fight it out for that all-important Winners Bracket bye at the 2023 LEC Season Finals.
The 2023 Summer Split isn’t the only big event we’ve got coming up in the LEC calendar. The 2023 LEC Season Finals will kick-off on August 19, and will run for four weeks, with match days every Saturday and Sunday. The six spots for the 2023 LEC Season Finals will be awarded to our Winter, Spring, and Summer Split champions, with the remaining places decided by championship points accrued from regular season finishes throughout the year.
These six teams will battle it out at the LEC Studio for a chance for one of three coveted spots at our 2023 LEC Season Finals roadshow, which will take place from September 8-10 in Montpellier, in the Occitanie region.
Tickets for the 2023 LEC Summer Split and 2023 LEC Season Finals matches taking place at the LEC Studio in Berlin, will go on sale on May 26 at 5pm CEST via emeatickets.lolesports.com. It’s important to note that we’re moving our ticketing services over to Vivenu, so tickets will no longer be available via Eventbrite. Tickets will be priced at €12, and will be available on a first-come, first-served basis, so you’ll need to act fast to secure yours!
We look forward to welcoming you all back to the LEC Studio for the remainder of the season! To keep up to date with all things 2023 LEC Summer Split and 2023 LEC Season Finals, follow us on socials and keep your eyes on lolesports.com.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt627cf49ce34aea50/645a1934d898ecb55d33b986/MSI23_Costreaming-v1.1.jpg" ,
            "title" => "In-Stadium Co-streaming to Join MSI 2023" ,
            "description" => "Ibai, Yoda, and SangHo and MinGyo Kim will co-stream MSI 2023 live from Copper Box Arena beginning May 18
After a successful kick-off of our first global virtual co-streaming effort, we are excited to announce that MSI 2023 will feature in-stadium co-streaming for the final 4 days of the tournament!
Ibai (ES), Yoda (BR), and SangHo Lee & MinGyo Kim (KR) will join us at Copper Box Arena to give you their unique takes on MSI 2023. From May 18 to the MSI Finals on May 21, these streamers will be co-streaming live from the arena, adding an extra layer of excitement.
To catch these co-streams, head to the links below:
Ibai: https://www.twitch.tv/ibai (May 19-21)
Yoda: https://www.twitch.tv/yoda (May 18-21)
SangHo Lee & MinGyo Kim: https://bj.afreecatv.com/lshooooo (May 18-21)
You can catch all things MSI 2023 on lolesports.com or by following LoL Esports on social media",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/bltcdf589dfc9e4688c/643f15fedc0035582e72ca94/MSI23_Primer_1600x900.png" ,
            "title" => "MSI 2023 Primer" ,
            "description" => "Get ready to defy all odds, the 2023 League of Legends Mid-Season Invitational will begin May 2! Here’s all you need to know about the competition - and how to collect some sweet MSI merch.
The Official Rules of the 2023 Mid-Season Invitational can be found here.
What is the Mid-Season Invitational?
The Mid-Season Invitational (MSI) is the first international competition of the annual LoL Esports calendar. MSI is an opportunity to evaluate the strengths and weaknesses of teams and regions at the midway point of the season. Representatives from each of the nine regions will battle it out for a shot at the MSI title. The event moves between host regions each year; this year, teams will compete in London, United Kingdom.
This year’s creative theme is “DEFY.” A bold resistance against one’s own limitations. A refusal to give into the naysayers. MSI is the arena where champions will defy what the world thinks of their region. The first step toward greatness is to push beyond the limits and show up with a spirit of DEFIANCE.
When is MSI happening?
MSI has two stages: the Play-In Stage (May 2-7) and the Bracket Stage (May 9-14, May 16-21).
Play-In Stage (All matches begin at 5 a.m. PST / 1 p.m. GMT unless otherwise noted)
Tuesday, May 2
Wednesday, May 3
Thursday, May 4
Friday, May 5
Saturday, May 6 - 4 a.m. PST / 12 p.m. GMT
Sunday, May 7 - 4 a.m. PST / 12 p.m. GMT
Bracket Stage (All matches begin at 5 a.m. PST / 1 p.m. GMT unless otherwise noted)
Tuesday, May 9
Wednesday, May 10
Thursday, May 11
Friday, May 12
Saturday, May 13 - 4 a.m. PST / 12 p.m. GMT
Sunday, May 14 - 4 a.m. PST / 12 p.m. GMT
Tuesday, May 16
Wednesday, May 17
Thursday, May 18
Friday, May 19
Saturday, May 20 - 4 a.m. PST / 12 p.m. GMT
(Finals) Sunday, May 21 - 4 a.m. PST / 12 p.m. GMT
Where will MSI take place?
The tournament will take place in the Copper Box Arena in London, United Kingdom. London is more than 1,900 years old with 9 million people living within its borders, making it the largest metropolis in the UK. Copper Box Arena played host to the 2012 Summer Olympics as well as a multitude of esports tournaments throughout its 10-year history.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/bltad386dea2ebb9f2f/6446b207d0a4771107c6bcff/1600x900_KV_Header.jpg" ,
            "title" => "Red Bull Solo Q Is Back for 2023" ,
            "description" => "The most intense, unique amateur League of Legends tournament is back! Red Bull Solo Q is returning for 2023, bringing a whole new take on the classic LoL formula, and giving everyone a chance to take part. This edition will be taking place alongside the 2023 Mid-Season Invitational in London this May.
What is Red Bull Solo Q?
Red Bull Solo Q takes the familiar elements of competitive League and turns them on their head to create the ultimate 1v1 matchup. Taking place on Howling Abyss, the one lane ARAM map, players have three different win conditions they can fulfill to take the victory: last hitting 100 minions, destroying the enemy tower, or scoring the first takedown of their opponent. Matches can be won or lost in the blink of an eye, leading to incredible matches
This will be the fourth edition of Red Bull Solo Q since the tournament started in 2020, and Riot has been along for the ride since the beginning. The 2022 edition of Red Bull Solo Q took place alongside the League of Legends World Championship in New York, giving players a chance to see the Group Stage in person between their matches.
 Ahilleas 'SneakyLemon' Natsis took the top spot after a series of clutch wins, followed by utter domination in the semis and a 4-2 win record in the final with his performance helped secure him a spot on Greek Legends League team Zerolag Esports for the 2023 season.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt4bb15f2b9cbecaab/64426a16398bc14b3cffe182/2023_Finals_Save_the_Date.jpg" ,
            "title" => "2023 LEC Season Finals to take place from September 8-10 with tickets going on sale June 19!" ,
            "description" => "With Spring Split drawing to a close this weekend, we’re edging nearer to our crown jewel event - 2023 LEC Season Finals - and it won’t be long until our best teams are competing on-stage in Montpellier, in the Occitanie region!
Now, we’re pleased to reveal further information about the finals, starting with the dates, which will take place from September 8-10 at the Sud de France Arena. The 2023 LEC Season Finals is the culmination of the competitive season and the biggest moment of the year for our fans, so mark those dates on your calendar and make sure you don’t miss out on the action!
We can also reveal that tickets will be available to purchase in the near future. Our roadshows are a way to bring fans together and those wanting to join us to experience the electrifying atmosphere will be able to get their hands on tickets from June 19. Further details, including prices for tickets and how to purchase them, will be revealed at a later date.
Some eagle-eyed fans will have also spotted the 2023 LEC Season Finals is taking place across three days instead of two this year. That’s because for the first time in EMEA LoL Esports history, we’ll be hosting the 2023 EMEA Masters Summer Finals at our LEC roadshow. The 2023 EMEA Masters Summer Finals will be held on September 8, prior to the 2023 LEC Season Finals itself, which will see the Lower Bracket Semi-Final take place on September 9 and the Grand Final on September 10.
“This year, we wanted to raise the bar for our LEC roadshow and level-up the experience for players & fans, which is why we decided to host the 2023 EMEA Masters Summer Finals at our roadshow for the first time ever,” said Maximilian Peter Schmidt, Director of League of Legends Esports EMEA. “EMEA Masters is an integral part of our ecosystem and acts as the pathway to the LEC for our ERL players. We’re excited to welcome some of the best ERL teams & players to the LEC roadshow and give fans a glimpse of the next generation of talent from EMEA.”
Finally, we’re delighted to reveal the return of the LEC XPO for the second year in a row. Following the success of the XPO at the 2022 LEC Summer Finals in Malmö last year, we want to continue to unleash fandom by giving our community the opportunity to closely interact with our partners and teams once more. Further information about the XPO will be revealed at a later date, so keep your eyes peeled for more details in the coming months.
Make sure you follow the LEC’s social media channels and EMEA Masters on Twitter, Twitch, and Instagram to stay up-to-date with all the news from the EMEA LoL Esports ecosystem. With the LEC Summer Split and 2023 EM Summer around the corner, you won’t want to miss out on any of the action.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
        Game_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/bltc8baf9282634b6b5/64404b79dc0035582e72ce8a/Gocheok_Sky_Dome_1_(1).jpg" ,
            "title" => "Announcing Worlds 2023 Venues, Dates, and Ticket Sales" ,
            "description" => "The League of Legends World Championship (Worlds) is returning to South Korea! From October 10-November 19, teams from around the globe will compete for the most prestigious title in esports.
Worlds will kick off in Seoul, travel to Busan, and return to Seoul to the iconic Sky Dome, where the two finalist teams will square off to determine who will hoist the Summoner’s Cup.
Korea is synonymous with excellence in esports and gaming, with a passionate community of fans and a legacy of developing some of the world’s most talented players,” said Naz Aletaha, Global Head of LoL Esports. “We’re thrilled to bring Worlds back to the birthplace of esports and home of the LCK, and look forward to celebrating the best-of-the-best in League with fans in Korea and around the world this fall.”
Korea previously hosted the 2022 Mid-Season Invitational in Busan and Worlds 2018 and Worlds 2014 with multi-city tours
We are thrilled to host the pinnacle of LoL Esports again after five years, said Aiden Lee, Secretary General of the LCK. 'We're working closely with Seoul and Busan to bring the best fan experience, and we can't wait to welcome fans to Worlds with a brand new format.'
Worlds’ new format will feature 22 teams in three stages of competition. If you’re not familiar with the changes, head to the LoL Esports State of the Game article we released in January.
The Play-In Stage will be October 10-15 at LoL Park in Seoul.
The Swiss Stage will be October 19-23 and October 26-29 at KBS Arena in Seoul.
Knockouts consist of Quarterfinals, Semifinals, and Finals.
Quarterfinals will be November 2-5 and Semifinals will be November 11-12, both taking place in Sajik Indoor Gymnasium in Busan.
The World Final will be on November 19 and will be played at the
Gocheok Sky Dome in Seoul, the largest indoor venue in the country and the home of Seoul-based baseball team, Kiwoom Heroes.
NOTE: The World Final has been scheduled later than usual to support the 19th Asian Games being held September 23-October 8 in Hangzhou, China! League of Legends and six other esports titles will be featured as medal events for the first time. The shift will accommodate our LoL Esports pro players competing in the Asian Games.
Tickets will officially go on sale in three waves! Play-In Stage tickets will go on sale July 10, Swiss Stage tickets will go on sale July 19, and Knockout Stage tickets will go on sale August 2.",
            "author" => "League of Legends E-Sports ©",
            "game_id" => 2
        ]) ;
    }
}

