<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    protected $fillable = ['team_name', 'team_logo', 'club_state'];

    public static function get_all_teams(){
        $teams = DB::table('teams')->get();
        return $teams;
    }
    public static function get_team_by_id($id){
        $team = DB::table('teams')
            ->where('id','=',$id)
            ->first();
        return $team;
    }

   public static function get_team_players($id){
        $team = DB::table('teams')
            ->rightJoin('players', 'players.team_id', '=', 'teams.id')
            ->where('teams.id', $id)
            ->get();
        return $team;
    }
    public static function set_team($data,$fileName)
    {
        $team = DB::table('teams')
                ->insertGetId([
                    'team_name' => $data['team_name'],
                    'club_state' => $data['club_state'],
                    'team_logo' => $fileName
                ]);
        return $team;
    }

    /**
     * set team total points
     */
    public static function add_point_to_team($team_id){
        $team_points = DB::table('teams')
                ->select('team_points')
                ->where('id','=',$team_id)
                ->first();


        $count = $team_points->team_points + 1;
        $result = DB::table('teams')
            ->where('id','=',$team_id)
            ->update(['team_points'=>$count]);
        return $result;
    }
}
