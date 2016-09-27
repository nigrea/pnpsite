<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'game_id','user_id','content'
    ];

    public function game(){
        $this->belongsTo('App\Game');
    }

    public function user(){
        $this->belongsTo('App\User');
    }

}
