<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamesystem extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function games(){
        return $this->belongsToMany('App\Game');
    }
}
