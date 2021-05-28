<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MainController extends Controller
{

    private function validationRules() {

        return [
            'team1' => 'required|string',
            'team2'  => 'required|string',
            'score1'  => 'required|numeric',
            'score2'  => 'required|numeric'
        ];
    }
    
    public function index() {

        $matches = Match::all();

        return view('pages.home', compact('matches'));
    }

    public function show($id) {

        $match = Match::findOrFail($id);

        return view('pages.show', compact('match'));
    }

    public function destroy($id) {

        $match = Match::findOrFail($id);

        $match -> delete();

        return redirect() -> route('home');
    }

    public function edit($id) {

        $match = Match::findOrFail($id);

        return view('pages.edit', compact('match'));
    }
    public function update(Request $request, $id) {

        $validateData = $request -> validate ($this -> validationRules());

        $match = Match::findOrFail($id);

        $match -> update($validateData);

        return redirect() -> route('show', $match -> id);
    }

    public function create() {

        return view('pages.create');
    }
    public function store(Request $request) {

        $validateData = $request -> validate ($this -> validationRules());

        $match = Match::create($validateData);

        return redirect() -> route('show', $match -> id);
    }
}
