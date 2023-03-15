<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    public function teams(){
        return $this->hasMany(Team::class)->with("players:id,name,team_id,image") ;
    }

    public function duel(){
        return $this->hasMany(Duel::class) ;
    }

    public function game(){
        return $this->belongsTo(Game::class) ;
    }
}
