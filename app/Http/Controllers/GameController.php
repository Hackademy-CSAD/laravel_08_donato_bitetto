<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\GameEditRequest;
use App\Http\Requests\GameCreateRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        /* ["games" => $games] equivale a compact('games') */
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $consoles = Console::all();
        return view('games.create',compact('categories','consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameCreateRequest $request)
    {
        $game = Game::create([
            "title" => $request->title,
            "release_year" => $request->release_year,
            "poster" => $request->file('poster')->store('public/img'),
            "category_id" => $request->category_id
        ]);

        $game->consoles()->attach($request->consoles);

        return redirect(route('games.create'))->with('success', 'Your game is published correctly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)//implicit binding
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $consoles = Console::all();
        return view('games.edit', compact('game','consoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GameEditRequest $request, Game $game)
    {
        $game->update([
            "title" => $request->title,
            "release_year" => $request->release_year,
            "poster" => $request->poster ? $request->file('poster')->store('public/img') : $game->poster
        ]);

        $game->consoles()->detach();
        $game->consoles()->attach($request->consoles);

        return redirect(route('games.edit', compact('game')))->with('success', 'Game successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect(route('games.index'))->with('success', 'Game deleted!');
    }
}
