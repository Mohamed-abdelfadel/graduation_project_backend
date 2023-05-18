<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function tournaments(){
        return $this->hasMany(Tournament::class)->with("duels:id,tournament_id,team1_id,team2_id,playoff_id,team1_score,team2_score,starting_date,status_id") ;
    }
    public function tournaments_only(){
        return $this->hasMany(Tournament::class);
    }
    public function news(){
        return $this->hasMany(Game_news::class) ;
    }
    public function duels(){
        return $this->hasMany(Duel::class) ;
    }
}
