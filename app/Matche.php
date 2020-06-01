<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Matche extends Model
{
    protected $fillable = ['team_one', 'team_two', 'winner'];
    public static function save_match_fixture_teams($t1,$t2){
//        $match = new Match;
//        $match->tea
//        DB::insert('insert into matches (team_one, team_two) values ($t1, $t2)');

        $id = DB::table('matches')->insertGetId(
            ['team_one' => $t1, 'team_two' => $t2]
        );
        return $id;
    }
    public static function set_winner($match_id,$winner){
        $id = DB::table('matches')
            ->where('id','=',$match_id)
            ->limit(1)
            ->update(['winner'=>$winner]);
        return $id;
    }
    /**
     * get match list
     */
    public static function get_all_matches()
    {
        $matches =  DB::table('matches')->get();
        foreach ($matches as $match){
            //name of first team
            $team_one = $match->team_one;
            $team_one_data = DB::table('teams')
                ->select('team_name')
                ->where('id','=',$team_one)
                ->first();
            $match->team_one_name = $team_one_data->team_name;
            //name of 2nd team
            $team_two = $match->team_two;
            $team_two_data = DB::table('teams')
                ->select('team_name')
                ->where('id','=',$team_two)
                ->first();
            $match->team_two_name = $team_two_data->team_name;
            if( $match->winner == 0){
               $match->team_winner_name = '';
            }elseif($team_one ==  $match->winner){
                $match->team_winner_name = $match->team_one_name;
            }else if($team_two== $match->winner){
                $match->team_winner_name = $match->team_two_name;
            }

        }
        return $matches;
    }
}
