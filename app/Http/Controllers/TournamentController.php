<?php

namespace App\Http\Controllers;
use App\Models\Tournament;

class TournamentController extends Controller
{
//  USAGE-> Getting all TOURNAMENTS
//  API-> /v1/tournaments
    public function index(){
        $tournaments = Tournament::query()
            ->select('id' , 'logo' , 'name' , 'starting_date')
            ->get() ;
        return response($tournaments) ;
    }

//  USAGE-> Getting TOURNAMENTS referenced to Tournament->id
//  API-> /v1/tournament/{id}
    public function show($id){
        $tournament = Tournament::query()
            ->select(['id', 'name', 'logo','description','total_prize','location','starting_date','first_team_prize','second_team_prize','third_team_prize'])
            ->findOrFail($id);
        return response($tournament);
    }

//  USAGE-> Getting all TEAMS reference to Tournament->id
//  API-> /v1/tournament-teams/{id}
    public function team($id){
    $tournaments = Tournament::query()
        ->select(['id'])
        ->with("teams_with_players:id,tournament_id,logo,name")
        ->orderBy('starting_date' , 'desc')
        ->findOrFail($id);
    Return response($tournaments) ;
    }

//  USAGE-> Getting all MATCHES reference to Tournament->id
//  API-> /v1/tournament-matches/{id}
    public function duels($id){
        $tournaments = Tournament::query()
            ->select(['id'])
            ->with('duels:id,tournament_id,team1_id,team2_id,playoff_id')
            ->findOrFail($id);
        return response($tournaments) ;
    }

//  USAGE-> Getting all NEWS reference to Tournament->id
//  API-> /v1/tournament-news/{id}
    public function news(){
        $news = Tournament::query()
            ->select(['id', 'name', 'logo'])
            ->with("news")
            ->get();
        return response($news) ;
    }

//  TODO-> Start working on ADMIN pages (Store , Update , Delete):
}
