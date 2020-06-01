<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Player extends Model
{
//    protected $fillable = [
//        'team_id', 'first_name', 'last_name', 'player_image', 'country', 'player_history'
//    ];
//    public function __construct()
//    {
////        parent::__construct();
//    }
//
//    public static function get_players($team_id)
//    {
//        return DB::table('players')
//            ->where('team_id',$team_id)
//            ->get();
//    }

public static function get_players($team_id){
    return DB::table('players')
            ->where('team_id',$team_id)
            ->get();
}
/**
 * insert players for particular team
 */
    public static function set_players($data,$fileName)
    {
        $player = DB::table('players')
            ->insertGetId([
                'team_id' => $data['team_id'],
                'first_name' => $data['player_f_name'],
                'last_name' => $data['player_l_name'],
                'country' => $data['player_country'],
                'player_image' => $fileName
            ]);
        return $player;
    }
}
