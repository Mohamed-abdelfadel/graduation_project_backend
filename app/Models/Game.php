<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function tournaments(){
        return $this->hasMany(Tournament::class)->with("duels:id,tournament_id,team1_id,team2_id,playoff_id,team1_score,team2_score,starting_date,live_status") ;
    }
    public function news(){
        return $this->hasMany(News::class) ;
    }
    public function duels(){
        return $this->hasMany(Duel::class) ;
    }
}
