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

    public function team1(){
        return $this->belongsTo(Team::class) ;
    }

    public function team2(){
        return $this->belongsTo(Team::class) ;
    }
    public function game(){
        return $this->belongsTo(Game::class) ;
    }
}
