<?php

namespace App\Http\Controllers;

use App\Matche;
use App\Player;
use App\Point;
use App\Team;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function index(){
        //echo '<pre>';print_r($_REQUEST);
        $players_team1 = Player::get_players($_REQUEST['team1']);
        $players_team2 = Player::get_players($_REQUEST['team2']);
        //$arr = array_merge($players_team1,$players_team2);
        //echo '<pre>';dd($players_team1);
        foreach ($players_team1 as $players){
            Point::set_points($_REQUEST['match_id'],$players->id);
        }
        foreach ($players_team2 as $players){
            Point::set_points($_REQUEST['match_id'],$players->id);
        }
        $team1_total = Point::get_total_run($_REQUEST['match_id'],$_REQUEST['team1']);
        $team2_total = Point::get_total_run($_REQUEST['match_id'],$_REQUEST['team2']);
        echo "$_REQUEST[team1] points: $team1_total \n\n";
        echo "$_REQUEST[team2] points: $team2_total \n\n";
        if($team1_total>$team2_total){
            Matche::set_winner($_REQUEST['match_id'],$_REQUEST['team1']);
            echo "$_REQUEST[team1] is winner";
        }else{
            Matche::set_winner($_REQUEST['match_id'],$_REQUEST['team2']);
            echo "$_REQUEST[team2] is winner";
        }
    }
    /**
     * add data to match table
     * add runs to player table for this match
     * add points to team tabel
     */
    public function set_runs()
    {
       // echo '<pre>';print_r($_REQUEST['team1']);die;
        $match_id = Matche::save_match_fixture_teams($_REQUEST['team1'],$_REQUEST['team2']);
        $players_team1 = Player::get_players($_REQUEST['team1']);
        $players_team2 = Player::get_players($_REQUEST['team2']);
        foreach ($players_team1 as $players){
            Point::set_points($match_id,$players->id);
        }
        foreach ($players_team2 as $players){
            Point::set_points($match_id,$players->id);
        }
        $team1_total = Point::get_total_run($match_id,$_REQUEST['team1']);
        $team2_total = Point::get_total_run($match_id,$_REQUEST['team2']);
        //echo  "$team1_total \n\n";
        //echo " $team2_total \n\n";die;
        if($team1_total>$team2_total){
            Matche::set_winner($match_id,$_REQUEST['team1']);
            Team::add_point_to_team($_REQUEST['team1']);
            return redirect('matches-all/admin');
        }else if($team1_total<$team2_total){
            Matche::set_winner($match_id,$_REQUEST['team2']);
            Team::add_point_to_team($_REQUEST['team2']);
            return redirect('matches-all/admin');
        }else{
            Matche::set_winner($match_id,'0');
            return redirect('matches-all/admin');
        }
    }
}

