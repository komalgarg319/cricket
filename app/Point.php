<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Player;

class Point extends Model
{

    public static function set_points($match_id,$player_id){
        $run = rand(0,250);
        $id = DB::table('points')->insertGetId(
            ['match_id' => $match_id, 'player_id' => $player_id,'player_points'=>$run]
        );
        return $id;
    }

    public static function get_total_run($match_id,$team_id){
        $total = DB::table('points')
            ->join('players','players.id','=','points.player_id')
            ->where('points.match_id','=',$match_id)
            ->where('players.team_id','=',$team_id)
            ->sum('points.player_points');
        return $total;
    }



}
