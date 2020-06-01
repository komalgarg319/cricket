@extends('layouts.admin')

@section('content')<?php //echo $id;die;?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{asset('home')}}">Home</a></li>
                        <!--<li class="breadcrumb-item active">Projects</li>-->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Team : {{$team?$team['team_name']:$team_data->team_name}}</h3>

                <div class="card-tools">
                    <?php
                    if(!empty($team)){ ?>
                        <a href="{{asset('player-add')}}/{{$team['team_id']}}" class="btn btn-secondary btn-success">Add players</a>
                  <?php  }elseif(!empty($team_data)){ ?>
                        <a href="{{asset('player-add')}}/{{$team_data->id}}" class="btn btn-secondary btn-success">Add players</a>
                  <?php  }
                    ?>

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Player Name
                        </th>
                        <th style="width: 30%">
                            Player Image
                        </th>
                        <th style="width: 20%">Country</th>
                       <!-- <th style="width: 20%">
                        </th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($team)){
                    foreach ($team['player'] as $team)
                    {
                    ?>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                                {{$team['first_name'].' '. $team['last_name']}}
                            </a>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{URL('/images/players/'.$team['player_image'])}}">
                                </li>
                            </ul>
                        </td>
                        <td>{{$team['country']}}</td>

                        <!--<td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>-->
                    </tr>
                    <?php
                    }
                    }else{
                    ?>
                        <tr>
                            <td colspan="5">No data.</td>

                        </tr>
                    <?php
                    } ?>




                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
