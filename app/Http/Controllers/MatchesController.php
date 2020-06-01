<?php

namespace App\Http\Controllers;

use App\Matche;
use App\Team;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index()
    {
        $results = Team::get_all_teams();
        $id = array();
        foreach ($results as $result) {
            $id[$result->id] = $result->id;
            $id[$result->id] = $result->team_name;
        }
        $rand_teams = array_rand($id, 2);
        $team1 = array();
        $team1['id'] = $rand_teams[0];
        $team1['team_name'] = $id[$rand_teams[0]];
        $team2 = array();
        $team2['id'] = $rand_teams[1];
        $team2['team_name'] = $id[$rand_teams[1]];
        $match_id = Matche::save_match_fixture_teams($team1['id'], $team2['id']);
        return view('fixture', ['team1' => $team1, 'team2' => $team2, 'match_id' => $match_id]);
    }
        /**
         * match fixture
         */
        public function match_fixture(){
            $results = Team::get_all_teams();
            $id = array();
            foreach ($results as $result) {
                $id[$result->id] = $result->id;
                $id[$result->id] = $result->team_name;
            }
            $rand_teams = array_rand($id, 2);
            $team1 = array();
            $team1['id'] = $rand_teams[0];
            $team1['team_name'] = $id[$rand_teams[0]];
            $team2 = array();
            $team2['id'] = $rand_teams[1];
            $team2['team_name'] = $id[$rand_teams[1]];
            //$match_id = Matche::save_match_fixture_teams($team1['id'],$team2['id']);
            return view('admin.matchfixture',['team1'=>$team1, 'team2'=>$team2]);
        }
    /**
     * show list of matches
     */
    public function matches_all($admin=null)
    {
        $matches = Matche::get_all_matches();
        if($admin==null) {
            return view('matchrecords',['matches' => $matches]);
        }elseif($admin == 'admin'){
            return view('admin/allmatches',['matches' => $matches]);
        }

    }
}
