<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function tournament(){
        return $this->belongsTo(Tournament::class) ;
    }

    public function players(){
        return $this->hasMany(Player::class) ;
    }

    public function duel(){
        return $this->hasMany(Duel::class) ;
    }

    public function result(){
        return $this->hasMany(Result::class) ;
    }
}
