<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Tournament extends Model
{
    use HasFactory;

    public function teams_with_players(){
        return $this->hasMany(Team::class)->with("players:id,name,team_id,image") ;
    }
    public function teams(){
        return $this->hasMany(Team::class);
    }
    public function duels(){
        $yesterday = Carbon::yesterday()->format('Y-m-d');
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');
        return $this->hasMany(Duel::class)
            ->with("team1:id,name,logo")
            ->with("team2:id,name,logo")
            ->with("playoff:id,name");
//            ->whereBetween('starting_date',[$yesterday, $tomorrow]);
        //            ->with("tournament:id,name,logo")
    }

    public function game(){
        return $this->belongsTo(Game::class) ;
    }
    public function tournament_news(){
        return $this->hasMany(Tournament_news::class) ;
    }
}
