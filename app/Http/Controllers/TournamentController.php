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
        $tournaments = Tournament::query()->select('id' , 'logo' , 'name' , 'starting_date' ,'ending_date')->get() ;
        return response($tournaments) ;
    }
    public function team($id){
    $tournaments = Tournament::query()->select(['id', 'name', 'logo'])->with("teams:id,tournament_id,logo")->orderBy('starting_date' , 'desc')->findOrFail($id);
    Return response($tournaments) ;
    }
    public function matches(){
        $tournaments = Tournament::query()->with('duels:id,tournament_id,team1_id,team2_id,playoff_id')->select("")->get();
        return response($tournaments) ;
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
