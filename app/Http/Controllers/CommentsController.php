<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Game;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Requests\CreateCommentRequest $request)
    {


        $comment = new Comment($request->all());


        Auth::user()->comments()->save($comment);

        Game::find($request['game_id'])->comments()->save($comment);


        return redirect()->action('GamesController@show', [$request['game_id']]);

    }


}
