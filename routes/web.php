<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/newtournament', 'HomeController@newtournament');
route::post('registerteams','HomeController@registerteams');
Route::get('/battle', 'HomeController@battle');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::group(['middleware' => ['auth']], function() { //on ne peut accéder à toutes les url d'admin seulement si on est connectés.

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes();
