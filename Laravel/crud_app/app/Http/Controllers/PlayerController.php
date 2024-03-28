<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function playerForm(){
        return view("register");
    }

    public function createPlayer(Request $request){
        $request->validate([
            'firstName' => 'required|max:50',
            'middleName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'ageGroup' => 'required',
            'gender' => 'required|in:Male,Female',
            'dob' => 'required|date',
            'sportsName' => 'required',
            'mobileNumber' => 'required|digits:10',
            'email' => 'required|email|unique:players,email',
            'password' => 'required|min:6|max:16',
            // 'terms' => 'required'
        ]);

        $player = new Player;
        $player->firstName = $request['firstName'];
        $player->middleName = $request['middleName'];
        $player->lastName = $request['lastName'];
        $player->ageGroup = $request['ageGroup'];
        $player->gender = $request['gender'];
        $player->dob = $request['dob'];
        $player->sportsName = $request['sportsName'];
        $player->mobileNumber = $request['mobileNumber'];
        $player->email = $request['email'];
        $player->password = md5($request['password']);
        // Player::create([$player]);
        $player->save();
        return redirect('/');
    }

    public function view(){
        $players = Player::all();
        $data = compact('players');
        return view('view')->with($data);
    }

    public function delete($id){
        $player = Player::find($id);
        if(!is_null($player)){
            $player->delete();
        }
        return redirect('/');
    }

    public function edit($id){
        $player = Player::find($id);
        if(is_null($player)){
            return redirect('/');
        }
        $data = compact('player');
        return view('edit')->with($data);
    }

    public function update($id, Request $request){
        $request->validate([
            'firstName' => 'required|max:50',
            'middleName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'ageGroup' => 'required',
            'gender' => 'required|in:Male,Female',
            'dob' => 'required|date',
            'sportsName' => 'required',
            'mobileNumber' => 'required|digits:10',
        ]);

        $player = Player::find($id);
        $player->firstName = $request['firstName'];
        $player->middleName = $request['middleName'];
        $player->lastName = $request['lastName'];
        $player->ageGroup = $request['ageGroup'];
        $player->gender = $request['gender'];
        $player->dob = $request['dob'];
        $player->sportsName = $request['sportsName'];
        $player->mobileNumber = $request['mobileNumber'];
        $player->email = $player->email;
        $player->save();
        return redirect('/');
    }
}