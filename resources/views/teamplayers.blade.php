@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Team name</th>
            <th scope="col">Team Logo</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row">{{$team['team_name']}}</th>
            <td> <img src="{{URL('/images/teams/'.$team['team_logo'])}}" width="30px" height="30px"> </td>
        </tr>

        </tbody>
    </table>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Player name</th>
            <th scope="col">Player image</th>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($team)){
            foreach ($team['player'] as $tm){
            ?>
        <tr>
            <td scope="row">#</td>
            <td><a href=""> {{$tm['first_name']. " " . $tm['last_name']}}  </a> </td>
            <td><a href=""> <img src="{{URL('/images/players/'.$tm['player_image'])}}" width="30px" height="30px"> </a> </td>
        </tr>
       <?php }} ?>
        </tbody>
    </table>
@endsection
