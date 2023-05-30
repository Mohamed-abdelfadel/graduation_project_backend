<?php

namespace Database\Seeders;

use App\Models\Tournament_news;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament_news::create([
            "id"=>100,
            "image" => "https://owcdn.net/img/60ad86ef89420.jpg",
            "title" => "penny: 'It was definitely a mental battle between the two teams'" ,
            "tournament_id" => 1,
            "description" => "after taking down Crazy Raccoon 2-0 in their opening match, with both maps going down to the wire, Version1 felt even more prepared to take on the bigger fish in the pond. In the 'game of nerves' that is Version1's first LAN event, that series proved crucial in propelling the North American squad in their match against Team Liquid.
'I definitely think that us playing that playing that [Crazy Raccoon] match is probably a decent amount of the reason why we beat Liquid,' vanity said. 'I think that we shed a lot more nerves in the first match than in the second one.'
With players visible to each other across the venue, and with hundreds of thousands of dollars on the line, alongside the pride of your continent, both teams were at edge. Emotions are high, adrenaline is seen everywhere, and yelling at your enemies across the room is something both teams cherish.
'It was definitely a mental battle between the two teams because even if the stream didn't show it, we were both yelling at each other the whole game, like yelling back and forth,' penny said. 'When stuff would go wrong for them, we make sure they know what they did wrong. And they do the same for us.'
The mental battle was one of the reasons Version1 believes they won out over Liquid tactically. Nowhere was this more noticeable than on Haven, the final map of the series. 'We full-eco'd them after losing the pistol round on a third map and I think that really got to them,' penny noted. 'We just kept the momentum going and they couldn't actually stop us.'
Later on the map, vanity flexed his mental game prowess further against Dom 'soulcas' Sulcas on Ascent, flicking against the British Skye behind him. After that flickshot, vanity did what he did best.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;

        Tournament_news::create([
            "image" => "https://owcdn.net/img/60b14b63c499d.jpg",
            "title" => "Fnatic eliminate Version1 from Master" ,
            "tournament_id" => 1,
            "description" => "VALORANT Masters: Reykjavik continued today, with only six teams left vying for the championship title. Day five of the tournament began in the lower bracket, where two more teams would face elimination.
The first of those elimination matches was a clash between FNATIC and Version1. Just yesterday, Fnatic survived a bout with X10 Esports to stay alive in the lower bracket, while Version1 had been knocked down after an incredibly close three-map series against NUTURN.
Both teams were runner-ups in Challengers in their respective regions, but it was clear to both of them that by the end of the day, the runner-up of this match would not be moving on in Iceland.
The series began on Icebox, where the first half of the map was a pendulum of momentum. Fnatic won the first four rounds after a pistol round win, followed by Version1 racking wins of their own. After 12 rounds, both teams were tied.
One particular play in the half was on Round 9. The action got started when Loic 'effys' Sauvageau and Nikita 'Derke' Sirmitev were traded out as Fnatic had people pushing through mid. Meanwhile, Martin 'MAGNUM' Penkov was able to kill Anthony 'vanity' Malaspina on A site.
Erik 'penny' Penny sat on A Rafters with Jett and peeked onto main with his Operator. He aimed his scope at James 'Mistic' Orfila and Domagoj 'doma' Fancev, pulling his trigger onto Mistic's Viper, but managed to catch doma in the collateral, even when the two didn't appear to be lined up for him.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;

        Tournament_news::create([
            "image" => "https://owcdn.net/img/60b29b0ea5496.jpg" ,
            "title" => "Fnatic survive elimination against Liquid" ,
            "tournament_id" => 1,
            "description" => "Yesterday, Fnatic stunned Version1 in a 2-0 match, with Nikita 'Derke' Sirmitev putting on a show. Liquid completed the top four as they themselves swept Team Vikings, Brazil's first seed. As the day came to a close, Dom 'soulcas' Sulcas revealed he was “super pumped for this game”, setting the stage for the EMEA Challengers Playoffs' grand final rematch.
Fnatic looked pristine on the opening Bind map, as is expected of them. The team has solidified Bind as their home turf — they haven't lost a single one out of ten played since the additions of Derke and Martin 'MAGNUM' Penkov. They took themselves to 6-1 as MAGNUM and Jake 'Boaster' Howlett kept on opening sites, combining for six first bloods.
At that point Connor 'Sliggy' Blomfield stepped in to have a few words with his team. It paid off as they recovered to 6-3, but then it was Fnatic's turn to request a timeout and hear from Jacob 'Mini' Harris. Liquid managed to close the lead their opponents held, but Fnatic still held on to the half 7-5.
Switching sides, Liquid won the pistol and their deserved second round, but when the Phantoms and Vandals came out Fnatic looked solid as they climbed to map point. The energy fueling the team's five round charge started to show on Boaster's player cam by their second consecutive round win; three rounds and eight kills later, Boaster stood up and let the entire stage know how he was feeling.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/60b4430fce711.jpg" ,
            "title" => "dapr: 'This is the top. We did this. We're the top.'" ,
            "tournament_id" => 1,
            "description" => "'It worked out exactly how we expected,' Jared 'zombs' Gitlin said.
The 'expected' he was referring to was Sentinels' 3-0 victory over FNATIC in the grand finals to complete their undefeated run through Masters Reykjavik.
But a 3-0 match is not the same as a blowout match. The first two maps went into overtime. The last map was 13-11.
In fact, across the Sentinels' five maps played against Fnatic this week, four maps finished with the bare minimum two-round differential. Sentinels won the other map by just three rounds. The two other teams Sentinels played in Iceland couldn't get any closer to Sentinels than six rounds.
It's not like either team didn't try to blow the other out. Sentinels jumped up to a 10-5 lead on the first map, Split, before Fnatic brought it back with six straight round wins. Fnatic started the second map, Bind, with a 9-4 lead but Sentinels put them on their back foot by winning eight of the next nine rounds. Sentinels started Haven with a 9-3 lead, but Fnatic started the second half with six straight round wins to tie it.
Sentinels victory on Split was boosted by zombs' best map of the tournament, leading his team in damage with more than 172 per round and finishing second in ACS with 259. His ability to anchor sites was displayed best when he used his Astra pull on the other side of a Cypher cage to kill two through a smoke en route to a Spectre 4K.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/64078192a1a2a.jpg" ,
            "title" => "VCT Americas League dates and format revealed" ,
            "tournament_id" => 2,
            "description" => "In terms of format, the VCT Americas will follow in the footsteps of the VCT EMEA. The ten partnered teams will play a single round-robin format during the regular season, each playing one Bo3 per week. This means that there will be five matches per week, while a mid-April superweek will see each team play two matches.
The regular season will play out between April 1 and May 20. Matches will be played between Saturday and Monday from 12 p.m. PT, with weekends hosting two matches a day and Monday being a single-match day. The six-best teams will move to the playoffs.
There will be just three days of rest between the season and the playoffs, which begin on May 23 and last until May 28. This final stage will be played out in a six-team double-elimination bracket, drafting the top three teams into Masters Tokyo as well as into VCT Champions.
Riot has also put forth the dates for the Last Chance Qualifier, which will be played between July 15 and 23.
The Riot Games Arena, formerly the LCS Studio, will be the stage for every VCT Americas League match. Fans will be able to follow the entire league live, with tickets for the first four weeks already up for sale. Full details regarding other weeks can be found in the official announcement.
Sentinels and 100 Thieves will play the league's opening match on April 1, with KRÜ Esports and FURIA taking the stage shortly after. The full schedule can be found here.
Today's announcement also gave a peak revealed the Americas' Ascension tournament, which will promote one team to the VCT League by 2024, will be a six-team tournament. The top two teams from NA, top two from Brazil, as well as one from LATAM North and one from LATAM South will qualify to Ascension this year. This tournament's exact format is currently unknown.",
            "author" => "VALORANT Champions Americas League",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/64696ff017489.jpg" ,
            "title" => "100 Thieves and Sentinels miss playoffs after VCT Americas Week 8" ,
            "tournament_id" => 2,
            "description" => "FURIA vs. Sentinels proved to be one of the most entertaining and high stakes matches of VCT Americas yet.
The first map of the series went to Sentinels' map choice of Split, where Sentinels coasted to a dominant 9-3 first half advantage. FURIA only managed to take one gun round in the entirety of their defense. The Brazilian team showed signs of life by taking the pistol and anti-eco rounds for the second time on the map, but Sentinels quickly reached double-digits by winning the bonus round and gaining a 10-5 advantage.
On round 16, FURIA needed a miracle to keep their heads in the game after making the vital mistake of leaving the spike near spawn with 30 seconds on the clock. That miracle came in the form of dgzin, who secured an unbelievable ace on site with two slick headshots onto Marved and zekken to win FURIA the round. Despite dgzin's heroics, FURIA soon lost the map to Sentinels 13-7.
FURIA proved to be even more dominant on their map pick, Haven, than Sentinels were on their own map pick of Split. While Sentinels started off the map by winning the pistol and anti-eco rounds, FURIA got the ball rolling on the bonus round with a 1v2 win by mwzera and ended the half 8-4.
The Brazilian team took the first four rounds of the second half of the map to reach map point 12-4. Sentinels managed to get one more round win with a 3K by Sacy before FURIA took the game 13-5 on round 18.
With an absurd 12 total rounds of overtime, the matchup of FURIA vs. Sentinels on Bind was one of the most memorable in this split of VCT Americas. Bind was truly neutral ground, as both teams had previously played on the map this split only once each.
mwzera clutched a 1v3 to begin the map in favor of FURIA. TenZ won the 1v1 in the bonus round for Sentinels, who quickly tied the map up 2-2. After trading control of the map, the first half ended evenly 6-6.",
            "author" => "VALORANT Champions Americas League",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/646d8ded46ae4.jpg" ,
            "title" => "Double upsets start VCT Americas playoffs" ,
            "tournament_id" => 2,
            "description" => "The first day of the VCT Americas Playoffs went the distance with two upsets and the longest overtime on record this season. FURIA and Evil Geniuses move on in the upper bracket while Leviatán and NRG Esports have dropped down to the lower bracket.
This is how it went down
Leviatán vs. FURIA
The fourth and fifth-seeded teams Leviatán and FURIA faced off against each other in the first game of the day. Both teams had lost four out of five of their previous matches and were looking to regain their confidence in the playoffs.
The first map of the day went to FURIA's map pick of Ascent, where Leviatán were 0-4 during the regular season. Leviatán's discomfort on the map quickly became evident. They lost their defender's side pistol round and ended the first half down 8-4.
The second half of the map was FURIA's playground. The Brazilian team carried out a nearly perfect defender's side, dropping only one round to Leviatán as a result of an early two-player deficit from their signature overaggression. On the final round, dgzin drew first blood and executed a 3K to finish Ascent 13-5 for his team.
Leviatán hoped to take the match all the way to the end with a win on Pearl, their 5-0 map. Unfortunately for the LATAM team, they began their best map at a 4-0 disadvantage to another pistol round win by FURIA. Leviatán lost two 3v1s to Mazin and Khalil respectively to end the half in yet another 8-4 scenario.
But Leviatán would come back with something to prove for the second half of the map. The LATAM team won the pistol round for the first time in the series. After dropping two quick rounds to FURIA, they initiated the comeback with six rounds in a row. Their map win looked inevitable on round 24 as they drew first blood and planted the spike on B site in a 5v4 scenario. But FURIA adapted and took the fight to Leviatán, and mazin stuck the spike through enemy fire to secure FURIA a miracle round and a chance in overtime.
Little did FURIA know, they were in for the long haul. Leviatán won the first round to get themselves to map point for the second time, but FURIA refused to lose. Khalil took the 1v1 to save the series for his team. With Leviatán in the lead, the South American teams traded defense round wins all the way to round 31, when Khalil came alive again with a 2K on the Shorty to clutch the 1v2 a second before the defuse.",
            "author" => "VALORANT Champions Americas League",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/646eae2426db4.jpg" ,
            "title" => "LOUD and Evil Geniuses claim first Tokyo slots from Americas" ,
            "tournament_id" => 2,
            "description" => "Much to the pleasure of fans, FURIA's win over Leviatán yesterday guaranteed Brazil a spot at Tokyo. LOUD, however, were hungry to earn another international appearance and made quick work of their opponents.
After claiming Haven's first pistol and bolstering their economy by winning the next four rounds, LOUD sat at a comfortable 5-0 scoreline before FURIA answered back with two rounds of their own. Unfortunately, little could be done against the monstrous stats put up by Less in the first half alone; the talent ended Haven's attacking half with a 1.59 rating and 3.0 K/D ratio.
Despite a valiant effort following the second pistol (which went the way of LOUD), FURIA were only able to claim one more round in the second half before their opponents won the next three to close out the map 13-4. Less and cauanzin put up amazing performances, with the latter claiming five first kills on Skye and stealing the show away from aspas, who was unusually quiet on Haven.
With a second chance on Ascent, the star duelist stepped things up and put up yet another amazing performance with flashy plays and clutches. After FURIA took the first two rounds of the map and threatened to take the bonus, aspas stole the round away with a 1v2 ace clutch, allowing LOUD to begin snowballing away with the lead.
With the momentum in their favor, LOUD began taking round after round, often overwhelming FURIA to the point of saving guns consecutive rounds in a row. A poor performance from dgzin, who ended the first half with a single kill, did little to even the odds. Even after taking their second pistol of the map, FURIA were once again unable to win any more rounds after LOUD had built up a sizable economy. With all the confidence on the world ",
        "author" => "VALORANT Champions Americas League",
        ]) ;

        Tournament_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt0476420d7e9bfda2/63dc2c7e4cd3b46624f763d8/MSI23_Announcement_Header.png" ,
            "title" => "Save-the-Date: MSI 2023 is Coming to London!" ,
            "tournament_id" => 3,
            "description" => "The League of Legends Mid-Season Invitational is coming to London! From May 2-21, 13 qualified teams from around the world will take to the global stage for the first time this year at Copper Box Arena, a key venue for esports located in Queen Elizabeth Olympic Park.
MSI 2023 Theme and Format DEF
Defy expectations. Defy haters. Defy doubts. MSI is all about showcasing regional strength midway through the season. It’s the first step toward greatness, pushing beyond limits and showing up with a spirit of defiance.
This year, MSI will feature two double-elimination stages; the Play-In Stage and the Bracket Stage, giving regions more opportunity to defy all odds. If you’re not familiar with the changes, head over to the LoL Esports State of the Game article we released in January. Join us in person at the Copper Box Arena or tune in live on lolesports.com to cheer on your favorite region!
Ticket Sales
Tickets officially go on sale at 2 am PST/10 am GMT February 23! Prices range from £29-£94. Visit http://axs.com/lolmsi2023 to learn more.
The Play-In Stage will be May 2-7
The Bracket Stage will be May 9-14 and May 16-20
The Final will be May 21",
            "author" => "League of legends MSI 2023",
        ]) ;
        Tournament_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt3882079e3f329415/63d39a3399f0c910e1719951/LEC_Winter_2023.jpg" ,
            "title" => "Here are the records to beat for the LEC Winter Split!" ,
            "tournament_id" => 3,
            "description" => "This past weekend, we stepped into a new era of the LEC. EU has become EMEA, complete with an all-new format and a few fresh faces – including our new competitor Team Heretics, and the newly-rebranded KOI. But at our heart we’re still the same LEC that we’ve always been, and what would the LEC be if we didn’t take a second to look back at our legacy?
Throughout our ten years of compelling competitive play, from the early days of the EU LCS to the current pillar of EMEA esports that is the LEC, we’ve seen some incredible players step up to the plate to write their names in the League of Legends history books. Records have been made, and broken, time and time again as metas develop and players come and go.
Just one weekend in, our players have already laid some strong claims to a spot in those history books. While Team Vitality and G2 Esports set themselves apart, refusing to drop even a single game, we’ve got a messy brawl in the middle of the standings as teams look to assign a pecking order after a long and turbulent offseason.
We saw rookies rise (shoutout to G2 Esports’ Yike, who currently has the highest total kills of any player in the league over their first three days playing on the LEC stage). And we saw veterans stumble, as new synergies and old rivalries led to some shaky showings from former superstars.
With the opening weekend of our LEC Winter Split now behind us, we wanted to take a look back into the misty depths of time at some of the LEC’s longest-standing records. It’ll take a whole lot of skill (and maybe just a little bit of luck), but there’s no better way for our teams to cement themselves as the region’s best by breaking one of our long-standing records.",
            "author" => "League of legends MSI 2023",
        ]) ;
        Tournament_news::create([
            "image" => "https://cdn.oneesports.gg/cdn-data/2023/04/LeagueofLegends_MSI2022_Trophy_Victory-1024x576.jpg" ,
            "title" => "MSI 2023: Schedule, results, standings, format, teams, where to watch" ,
            "tournament_id" => 1,
            "description" => "Updated on May 9, 2:47 p.m. (GMT+8): Added bracket stage schedule.
This year’s Mid-Season Invitational (MSI 2023) will be unlike any other.
Earlier this year, Riot Games announced that the annual international tournament will undergo major format changes, with the inclusion of two more teams, bringing the total number of participating teams from 11 to 13.
The major regions — LCS, LEC, LCK, and LPL — each get to fly in two representatives to London in the United Kingdom, the venue of MSI 2023.
Here’s everything you need to know about MSI, including its schedule, results, standings, format, teams, and where to watch the tournament.
The League of Legends Mid-Season Invitational (LoL MSI) is the first international tournament of the competitive year, held between Spring and Summer splits (except for the LEC, where it’s held between the Winter and Spring splits).
The top teams from the Winter and Spring splits are invited to participate at MSI, which will be held at Copper Box Arena located in Queen Elizabeth Olympic Park in London.
This year’s theme is “Defy,” where teams are expected to defy expectations, doubts, and haters to “showcase regional strength midway through the season” according to an official statement by LoL Esports.",
            "author" => "League of legends MSI 2023",
        ]) ;
        Tournament_news::create([
            "image" => "https://staticc.sportskeeda.com/editor/2023/05/214cd-16841418686918-1920.jpg" ,
            "title" => "LoL MSI 2023: K'Sante, The Top Performer" ,
            "tournament_id" => 1,
            "description" => "First, let's take a look at the hard facts. K'Sante is by far one of the most popular champions at the tournament. That's evident from his 85% pick/ban rate. This value means that in 86% of all games played at the Mid-Season Invitational – as of writing this article – K'Sante was either picked or banned.
Hey, maybe you can find some personalized K'Sante key caps on amazon!
It's not just his presence that's insane, but he has an impressive win rate as well. K'Sante currently sits at 60%, with 15 wins and 10 losses. Need we say more? Only Vi has a higher pick/ban rate in the jungle, so K'Sante is undoubtedly the most popular top laner at MSI 2023.",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/FuOcmcFWYAI_aVm?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "Registration for the League of Legends Playground Championship is open for its first season this year in the Middle East and Africa region!",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/FuaSysVWwAQs1cF?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "here are only three days left until registration for the League of Legends Playground Tournament closes!",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/Fu0ekK_WwAI7z2Z?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "For the first time, watch the entire MSI tournament in Arabic with the streamer Dattura6 ! All you have to do is head over to his Twitch channel and catch up on all the exciting matches!",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/Fs3xLa6WIAAFeML?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "The friendly match that brings together influencers and streamers in Turkey and the MENA region has now started!",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://rocketleague.media.zestyio.com/rl_blog_tournaments_2v2_16x9.jpg" ,
            "title" => "Rocket League Competitive Tournaments" ,
            "tournament_id" => 5,
            "description" => "Competitive Tournaments offer a different way to compete. Competitive Tournaments is a Ranked mode that pits you against teams of similar skill to earn rewards. Players can join every scheduled Tournament each week. There's no limit to how many Tournaments you may join.
Tournament Credits are earned by playing in Competitive Tournaments. These Credits can be used to purchase exclusive Tournament Items. The Credits cannot be purchased and must be earned.
Competitive Tournaments are 32-team, single-elimination brackets based on each team's skill. Teams play one match each round until the Semifinals and Finals, which are best of three. Teams that lose the first round (or show up after the Tournament start time) can join a Second Chance bracket for another try at victory.
Competitive Tournaments are 2v2, 3v3, and support parties or solo players. In mixed-rank parties, the highest skilled player is considered the base. If two Platinum II players team up with a Diamond I player, that team will be entered into a Diamond Tournament.
For more info, check out: What are rank restrictions for Parties in Rocket League?
Tournaments rely on all teams finishing their games in a timely manner so matches have a hard endpoint. Matches cannot go over 11 total minutes. This includes time spent for kickoffs and replays. If the game is tied, the team with the most shots wins. If the number of shots is the same, then the winner will be decided by a coin flip.
Registration is open for everyone! You can register as an incomplete team, a full team, or by yourself. Once registered, you will receive a notification when the Tournament is about to start.",
            "author" => "Collegiate Rocket League",
        ]) ;
        Tournament_news::create([
            "image" => "https://rocketleague.media.zestyio.com/Tournaments_PrematchLobby_v2.jpg" ,
            "title" => "REVAMPED TOURNAMENTS: A CLOSER LOOK" ,
            "tournament_id" => 5,
            "description" => "Get ready to join and compete in Rocket League's revamped in-game Tournaments, all of which are completely free to join!

Players will soon be able to sign up for Competitive Tournaments, a new ranked mode within Tournaments that pits you against teams of similar skill to earn rewards. Each region has multiple Competitive Tournaments scheduled each day, so you'll have plenty of opportunities to compete. You can sign up from the revamped Tournaments Menu that shows the daily schedule for your region.
Once a Competitive Tournament begins, we generate 32-team, single-elimination brackets based on each team's skill. Teams will play one match each round until the Semifinals and Finals, which are best of three. Teams that lose in the first round (or show up after the Tournament start time) can join a 'Second Chance' bracket for another try at victory.
Competitive Tournaments are 3v3 at launch and support parties of all sizes, from a full squad of three to a solo-queued hopeful. Your Tournaments Rank is initially determined by your Rank from Competitive matchmaking, but changes over the course of each season depending on your Tournaments performance. Like Competitive matchmaking, we base the skill of mixed-rank parties on their highest skilled player. For example, if two Gold II players team up with a Diamond I player, that team will be entered into a Diamond Tournament.
Win your games, move forward, and get closer to brand new rewards in Rocket League Tournaments. ",
            "author" => "Collegiate Rocket League",
        ]) ;
        Tournament_news::create([
            "image" => "https://kcgb5f9l.media.zestyio.com/Ally_NA_EU_Tournaments_FINAL--1-.jpg" ,
            "title" => "ALLY AND ROCKET LEAGUE ESPORTS TEAM UP FOR COMMUNITY TOURNAMENTS!" ,
            "tournament_id" => 5,
            "description" => "Ally and Rocket League Esports have teamed up for two community tournament series in Europe and North America! Without further ado, we’re proud to introduce The Draw and Rising Stars Odyssey. Ally is proudly supporting Rocket League’s amateur and semi-pro scene with a series of tournaments across Europe and North America that’ll provide aspiring players a chance to play against some of the top Rocket League Championship Series (RLCS) players and teams in the world.
Now you’ve got the idea, let’s jump right into the details
The Draw is a North American series of high-stakes tournaments presented by community favorites Jamesbot and Rizzo! These tournaments will see top RLCS teams competing against new and rising talent with a $70,000 overall prize pool on the line ($14,000 per event). The Draw will consist of a total of five tournaments and ten live broadcasts, which will be broadcast live on Rizzo’s Twitch Channel. ",
            "author" => "Collegiate Rocket League",
        ]) ;
        Tournament_news::create([
            "image" => "https://kcgb5f9l.media.zestyio.com/RLCS_Community_Guidelines_01.jpg" ,
            "title" => "ROCKET LEAGUE COMMUNITY TOURNAMENT GUIDELINES UPDATE" ,
            "tournament_id" => 5,
            "description" => "With the continued growth of Rocket League Esports and interest in community events, we felt it was time to update our Community Tournament Guidelines. If your tournament meets these guidelines, it is covered via the Community License and you do not need to ask Psyonix for further approval to run your tournament.
The new guidelines are more robust to more easily plan your event. A number of adjustments have been made, but some of the larger changes are highlighted below:
Increased the prizing and appearance fee cap from $5,000 to $15,000 per event
Removed the annual prizing cap of $50,00
Crowdfunding is no longer restricted to only funding the prize pool (however, it still must remain within the compensation cap of $50,000)
All players must be at least 13 years old (or such other age, if greater, as may be required in such player’s country of residence)
The full list of restricted sponsors is now publicly available for reference
Clarification on the use of Rocket League marks and tournament branding
Please be advised that in-person community Rocket League events are currently not permitted due to the ongoing. We eagerly await the moment when we can welcome back community LAN events and hope to have an update in the near future.",
            "author" => "Collegiate Rocket League",
        ]) ;

    }
}
