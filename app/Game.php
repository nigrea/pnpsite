<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name', 'description', 'website', 'rating', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function publishers(){
        return $this->belongsToMany('App\Publisher');
    }

    public function gamesystems(){
        return $this->belongsToMany('App\Gamesystem');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
