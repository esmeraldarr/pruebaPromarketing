<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateGame;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::select('id','name','url','description','url_image','status')
                    ->where('status', '!=', 2)    
                    ->get();

        return view('game.index')->with('games',$games);
    }
    
    public function create()
    {
        return view('game.create');
    }

    public function store(ValidateGame $request)
    {
        $game = Game::create([
            'name' => $request->name,
            'url'  => $request->url,
            'description' => $request->description,
            'status' => $request->status,
            'url_image' => $request->url_image
        ]);
        
        return redirect()->route('game.index');

    }

    public function show(Game $game)
    {
        return view('game.show')->with('game',$game);
    }

    public function edit(Game $game)
    {
        return view('game.edit')->with('game', $game);
    }

    
    public function update(ValidateGame $request,Game $game)
    {
        $game->update([
            'name' => $request->name,
            'url'  => $request->url,
            'description' => $request->description,
            'status' => $request->status,
            'url_image' => $request->url_image 
        ]);

        return redirect()->route('game.index');
    }

    
    public function delete(Request $request, Game $game)
    {
        $game->delete();

        return redirect()->route('game.index');
    }

    
}
