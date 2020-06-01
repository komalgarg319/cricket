@extends('layouts.app')
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Team List</th>
            <th scope="col">Team Overall Points</th>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($teams)){
            foreach ($teams as $team) {
            ?>
        <tr>
            <th scope="row">#</th>
            <td><a href="team-players/{{$team->id}}"> <?php echo $team->team_name ?> </a> </td>
            <td> {{$team->team_points}}  </td>
        </tr>
       <?php }} ?>
        </tbody>
    </table>
@endsection

