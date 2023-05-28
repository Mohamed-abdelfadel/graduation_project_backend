<?php

namespace App\Http\Controllers;
use App\Models\Team;
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
//  TODO USED

    public function show($id){
        $tournament = Tournament::query()
            ->select(['id', 'name', 'logo','description','total_prize','location','starting_date','first_team_prize','second_team_prize','third_team_prize'])
            ->findOrFail($id);
        return response($tournament);
    }

//  USAGE-> Getting all TEAMS reference to Tournament->id #With Players
//  API-> /v1/tournament-teams/{id}
//  TODO USED
    public function team($id){
    $tournaments = Tournament::query()
        ->select(['id'])
        ->with("teams_with_players:id,tournament_id,logo,name")
        ->findOrFail($id);
    Return response($tournaments) ;
    }
//  USAGE-> Getting all TEAMS reference to Tournament->id
//  API-> /v1/tournament-teams/{id}
    public function teams($id){
        $tournaments = Tournament::query()
            ->select(['id'])
            ->with("teams")
            ->orderBy('starting_date' , 'desc')
            ->findOrFail($id);
        Return response($tournaments) ;
    }

//  USAGE-> Getting all MATCHES reference to Tournament->id
//  API-> /v1/tournament-matches/{id}
    public function duels($id){
        $tournaments = Tournament::query()
            ->select(['id'])
            ->with('duels:id,tournament_id,team1_id,team2_id,team1_score,team2_score,playoff_id,status_id')
            ->findOrFail($id);
        return response($tournaments) ;
    }

//  USAGE-> Getting all NEWS reference to Tournament->id
//  API-> /v1/tournament-news/{id}
    public function news(){
        $news = Tournament::query()
            ->with("tournament_news")
            ->get();
        return response($news) ;
    }
//    public function list(){
//        if(request('search')){
//            $search = request('search') ;
//            $customers = Customer::where('name', 'like', "%$search%")->orWhere('id', 'like', "%$search%")->orWhere('phone', 'like', "%$search%")->orWhere('email', 'like', "%$search%")->orWhere('address', 'like', "%$search%")->paginate(10)->withQueryString();
//        }
//        else{
//            $customers = Customer::query()->latest('updated_at')->with('city')->paginate(10) ;
//        }
//        return view('customers.list' , compact('customers')) ;
//    }
//    public function search(){
//        $search = request('search') ;
//        $tournaments = Tournament::
//        return response($tournaments) ;
//    }

//  TODO-> Start working on ADMIN pages (Store , Update , Delete):
}
