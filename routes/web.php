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

Route::get('/', function () {
    return view('mainpage');
});

Route::get('teams', 'TeamsController@index');
Route::get('team-players/{id}', 'TeamsController@show');
Route::get('teams/{id}', 'TeamsController@show');
Route::get('matches', 'MatchesController@index');
Route::get('points', 'PointsController@index');
Route::get('match-records', 'MatchesController@matches_all');



/**
 * Admin pannel
 */
//Route::get('/admin', function (){
//    return view('admin.home');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/team/{id}/{admin}', 'TeamsController@show');

Auth::routes();

Route::get('/team-add', 'TeamsController@team_add');

Auth::routes();

Route::post('/submit-team', 'TeamsController@team_submit');

Auth::routes();

Route::get('/player-add/{team_id}', 'TeamsController@player_add');

Auth::routes();

Route::post('/submit-player', 'TeamsController@player_submit');

Auth::routes();

Route::get('/matches-all/{admin}', 'MatchesController@matches_all');

Auth::routes();

Route::get('/match-fixture', 'MatchesController@match_fixture');

Auth::routes();

Route::get('/set-runs', 'PointsController@set_runs');
