<?php

namespace App\Providers;

use App\Effet;
use App\Skill;
use App\Tryptique;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $triptyques = Tryptique::all();
        $skills = Skill::all();
        $effets = Effet::all();
        View::share(["triptyques"=>$triptyques,"skills"=>$skills,"effets"=>$effets]);
    }
}
