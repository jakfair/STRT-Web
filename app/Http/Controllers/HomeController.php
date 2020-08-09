<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Tryptique;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }
    public function newtournament()
    {
        $triptyques = Tryptique::all();
        $skills = Skill::all();
        return view('newtournament',["triptyques"=>$triptyques,"skills"=>$skills]);
    }
    public function battle()
    {
        return view('battle');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
