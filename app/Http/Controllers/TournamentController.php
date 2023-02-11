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
    public function teams($id){
        $tournament = Tournament::with('teams')->find($id) ;

        $data = array();
        foreach ($tournament->teams as $team){
            $data[]=["id"=> $team->id ,"name"=> $team->name ,"logo"=> $team->logo];
        }

        return $data ;
    }

}
