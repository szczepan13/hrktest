<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Session;


class TeamController extends Controller
{

    public function index(){

        $teams = Team::all();
        return view('team.index', ['teams' => $teams]);
    }

    public function create(){

        return view('team.create');
    }

    public function store(Request $request){

        $this->validate($request, array(
            'name'          => 'required|max:255',
        ));
        $team = new Team();
        $team->name = $request->name;
        $team->save();

        Session::flash('success', 'The was successfully created!');

        return redirect()->route('team.index');
    }

    public function destroy(Request $request, $id){

        $team = Team::find($id);
        $team->players()->delete();
        $team->delete();

        Session::flash('success', 'The team was deleted');

        return redirect()->route('team.index');
    }
}