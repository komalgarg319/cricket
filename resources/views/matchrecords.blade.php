@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-body">
            Matches
        </div>
    </div>
    <table class="table table-striped" id="dtBasicExample">
        <thead>
        <tr>
            <th scope="col">Match number</th>
            <th scope="col">First Team</th>
            <th scope="col">Second Team</th>
            <th scope="col">Winner</th>
        </tr>
        </thead>
        <tbody>


            <?php if(!empty($matches)){
                foreach ($matches as $match){
                    ?>
                    <tr>
                        <td>{{$match->id}}</td>
                        <td>{{$match->team_one_name}}</td>
                        <td>{{$match->team_two_name}}</td>
                        <td>{{($match->team_winner_name != NULL && $match->team_winner_name != '0')?$match->team_winner_name:'Match Draw'}}</td>
                    </tr>

                    <?php
                }

            }else{ ?>
                <tr><td colspan="4">No data.</td></tr>
                  <?php  }?>



        </tbody>
    </table>


@endsection

