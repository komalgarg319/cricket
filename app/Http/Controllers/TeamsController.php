<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public static function index()
    {
        $teams = Team::get_all_teams();
        return view('team', ['teams' => $teams]);
    }
    /**
     * list of players in particular team
     */
//    public static function team_players($id)
//    {
//        $teams = Team::get_all_teams();
//        return view('team', ['teams' => $teams]);
//    }

    public function show($id,$admin=null)
    {
        $team = Team::get_team_players($id);
        $team_data = Team::get_team_by_id($id);
        $result = array();
        $i = 0;
        foreach ($team as $tm) {
            $result['team_name'] = $tm->team_name;
            $result['team_id'] = $tm->team_id;
            $result['team_logo'] = $tm->team_logo;
            $result['player'][$i]['first_name'] = $tm->first_name;
            $result['player'][$i]['last_name'] = $tm->last_name;
            $result['player'][$i]['player_image'] = $tm->player_image;
            $result['player'][$i]['country'] = $tm->country;
            $result['player'][$i]['player_history'] = $tm->player_history;
            $i++;
        }
        if($admin==null) {
            return view('teamplayers', ['team' => $result]);
        }elseif($admin == 'admin'){//echo '';print_r($result);die;
            if(!empty($result)){
                return view('admin.players', ['team' => $result]);
            }else{
                return view('admin.players', ['team' => $result,'team_data'=>$team_data]);
            }

        }
    }
    public function team_add()
    {
        return view('admin.addteam');
    }
    public function team_submit(Request $request)
    {
        //echo strtolower($request->image->getClientOriginalExtension());die;
        $request->validate([
            'team_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.strtolower($request->image->getClientOriginalExtension());

        $request->image->move(public_path('images/teams'), $imageName);
        //$fileName =   $request->image->getClientOriginalName();

        $team_id = Team::set_team($request,$imageName);
        if(isset($team_id)){
            return redirect('home');
        }else{
            echo 'Team not added';
        }

    }
    public function player_add($team_id)
    {
        return view('admin.addplayer',['team_id'=>$team_id]);
    }

    public function player_submit(Request $request)
    {
        $request->validate([
            'player_f_name' => 'required',
            'player_l_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.strtolower($request->image->getClientOriginalExtension());

        $request->image->move(public_path('images/players'), $imageName);
        //$fileName =   $request->image->getClientOriginalName();

        $player_id = Player::set_players($request,$imageName);
        return redirect('team/'.$request['team_id'].'/admin');

    }

}
