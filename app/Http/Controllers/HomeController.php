<?php

namespace App\Http\Controllers;

use App\Characters;
use App\Skill;
use App\Tryptique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $save = Characters::where("iduser", Auth::id())->get();
        return view('home',["save"=>$save]);
    }
    public function newtournament()
    {
        $triptyques = Tryptique::all();
        $skills = Skill::all();
        $save = Characters::where("iduser", Auth::id())->get();
        return view('newtournament',["triptyques"=>$triptyques,"skills"=>$skills,"save"=>$save]);
    }
    public function registerteams(Request $request){
        $deleteteams = Characters::where("iduser", Auth::id())->delete();

        $user = Auth::user();
        $user->round = 1;
        $user->save();

        $id = Auth::id();
        $newcharacters = new Characters();
        $newcharacters->iduser =$id;
        $newcharacters->JSON = $request->input('teamJSON');
        $newcharacters->save();

        $newcharacters = new Characters();
        $newcharacters->iduser =$id;
        $newcharacters->JSON = $request->input('teamJSONennemy1');
        $newcharacters->save();
        return redirect()->to('/battle');
    }
    public function battle(Request $request)
    {
        $save = Characters::where("iduser", Auth::id())->get();
        return view('battle',["save"=>$save]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
