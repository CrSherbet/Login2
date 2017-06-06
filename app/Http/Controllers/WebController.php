<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Hero as Hero;
use App\Models\Player as Player;
use App\User as User;

class WebController extends BaseController{

    public function getRegister(){
        return view('layouts.register');
    }

    public function postRegister(Request $request){
        $data = User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'project' => $request['project'],
            
        ]);
        Auth::login($data);
        return redirect('/main');
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    function showHero(){
        $data = Hero::join('country','hero.Country','=','country.CountryAbbr')->get();
        return view('layouts.main', ['infoHero'=> $data]);
    }

    function insertHero(){

    } 

    function delHero($id){
        $data = Hero::where('HeroName','=', ''.$id.'')->delete();
        return $this->showHero();
       
    }

    function showPlayer(){
        $data = Player::join('country','player.Country','=','country.CountryAbbr')
                        ->leftJoin('team','player.TeamID','=','team.TeamID')
                        ->leftJoin('hero','hero.HeroName','=','player.MainCharName')->where('CountryAbbr','=','KOR')->get();
        return view('layouts.Player',['infoPlayer' => $data]);
    }

   function delPlayer($battleTag){
        Player::where('BattleTag','=',''.$battleTag.'')->delete();
        return $this->showPlayer();
    }

    function insertPlayer(){
        $battleTag = $_GET['battleTag'];
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $team  = $_GET['team'];
        $position = $_GET['position'];
        $country = $_GET['country'];
        return view('layouts.Player',['infoPlayer' => $data]);

        // Player::insert(['BattleTag' => $battleTag ,
        //                 'PFirstName' => $firstname,
        //                 'PLastName' => $lastname,
        //                 'TeamID' => $team,
        //                 'Position' => $position,
        //                 'Country' => $country ]);
        
    }

    function showForm(){
        return view('layouts.insertPlayerForm');
    }
}
