<?php

namespace App\Http\Controllers;

use App\Team;
use App\Player;
use Illuminate\Http\Request;
use Session;

class PlayerController extends Controller
{
    public function index(Request $request, $team_id){

        $players = Team::find($team_id)->players;
        return view('player.index', ['players' => $players, 'team_id' => $team_id]);
    }

    public function create(Request $request, $team_id){

        return view('player.create', ['team_id' => $team_id]);
    }

    public function store(Request $request, $team_id){

        $this->validate($request, array(
            'name'          =>  'required|max:255',
            'familyname'    =>  'required|max:255'
        ));
        $team = Team::find($team_id);
        $player = new Player();
        $player->name = $request->name;
        $player->familyname = $request->familyname;
        $player->age = $request->age;
        $player->team()->associate($team);
        $player->save();
        Session::flash('success', 'Player was created and added to team');
        return redirect()->route('player.index', $team_id);

    }

    public function destroy(Request $request, $id){

        $player = Player::find($id);
        $player->delete();

        Session::flash('success', 'The team was deleted');

        return redirect()->route('player.index', $player->team_id);
    }

}