<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Game;
class Tournament extends Model
{
    use HasFactory;

    public function teams(){
        return $this->belongsToMany(Team::class) ;
    }

    public function game(){
        return $this->belongsTo(Game::class) ;
    }
}