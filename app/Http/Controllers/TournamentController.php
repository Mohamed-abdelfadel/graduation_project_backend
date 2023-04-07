<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::query()->select('id' , 'logo' , 'name' , 'starting_date')->get() ;
        return response($tournaments) ;
    }
    public function team($id){
    $tournaments = Tournament::query()->select(['id'])->with("teams_with_players:id,tournament_id,logo,name")->orderBy('starting_date' , 'desc')->findOrFail($id);
    Return response($tournaments) ;
    }
//    public function teams($id){
//        $tournaments = Tournament::query()->select(['id'])->with("teams:id,tournament_id,logo,matches_played,wins,loses")->findOrFail($id);
//        Return response($tournaments) ;
//    }
    public function duels($id){
        $tournaments = Tournament::query()->select(['id'])->with('duels:id,tournament_id,team1_id,team2_id,playoff_id')->findOrFail($id);
        return response($tournaments) ;
    }

    public function show($id){
        $tournament = Tournament::query()->select(['id', 'name', 'logo','description','total_prize','location','starting_date','first_team_prize','second_team_prize','third_team_prize'])->with('teams:id,tournament_id,name,logo,matches_played,wins,loses')->findOrFail($id);
        return $tournament;
    }
    public function news(){
        $news = Tournament::query()->select(['id', 'name', 'logo'])->with("news")->get();
        return response($news) ;
    }
}
//$tournaments = Tournament::query()->with("teams")->orderBy('starting_date' , 'desc')->get();
//$tournaments_data = array();
//foreach ($tournaments as $tournament){
//    $tournaments_data[]=[
//        "id"=> $tournament->id ,
//        "name"=> $tournament->name ,
//        "logo"=> $tournament->logo ,
//        "teams"=> $tournament->teams,
//
//    ];
//}
//return response($tournaments_data) ;

//        $data = array();
//        foreach ($tournament->teams as $team){
//            $data[]=["id"=> $team->id ,"name"=> $team->name ,"logo"=> $team->logo];
//        }
//
//        return $data ;
