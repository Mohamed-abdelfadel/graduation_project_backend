<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duel extends Model
{
    use HasFactory;
    public function playoff(){
        return $this->belongsTo(Playoff::class) ;
    }

    public function tournament(){
        return $this->belongsTo(Tournament::class) ;
    }

    public function team_1()
    {
        return $this->belongsTo(Team::class , "team1_id" , "id" );
    }
    public function team_2()
    {
        return $this->belongsTo(Team::class , "team2_id" , "id" );
    }
    public function game(){
        return $this->belongsTo(Game::class) ;
    }
}
