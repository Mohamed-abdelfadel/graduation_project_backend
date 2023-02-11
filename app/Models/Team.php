<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function tournament(){
        return $this->belongsToMany(Tournament::class) ;
    }

    public function player(){
        return $this->hasMany(Player::class) ;
    }
}
