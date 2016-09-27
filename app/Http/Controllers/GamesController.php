<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Game;
use App\Tag;
use App\Gamesystem;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class GamesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    public function index()
    {
        $games = Game::all();
        return view('game.index', compact('games'));

    }


    public function show($games)
    {

        $game = Game::findOrFail($games);


        return view('game.show',compact('game'));

    }

    public function create()
    {

        $tags = Tag::lists('name','id');
        $gamesystems = Gamesystem::lists('name','id');

        return view('game.create', compact('tags','gamesystems'));
    }

    public function store(Requests\CreateGameRequest $request)
    {

        $game = new Game($request->all());

        Auth::user()->games()->save($game);

        $game->tags()->attach($request->input('tags'));

        $game->gamesystems()->attach($request->input('gamesystems'));

        Image::make( Input::file('image'))->resize(300, 200)->save('img/game/'.$game['id'].'.jpg');

        return redirect('games');

    }


}
