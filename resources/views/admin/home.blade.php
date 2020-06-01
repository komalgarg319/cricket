@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Teams</h1>
                </div>
                <div class="col-sm-6">
                    <!--<ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{asset('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>-->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Teams</h3>

                <div class="card-tools">
                    <a href="{{asset('team-add')}}" class="btn btn-secondary btn-success">Add Team</a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 20%">
                            #
                        </th>
                        <th style="width: 25%">
                            Team Name
                        </th>
                        <th style="width: 25%">
                            Team Logo
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($teams)){
                    foreach ($teams as $team)
                    {
                    ?>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                                {{$team->team_name}}
                            </a>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{URL('/images/teams/'.$team->team_logo)}}">
                                </li>
                            </ul>
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="team/{{$team->id}}/admin">
                                <i class="fas fa-folder">
                                </i>
                                View Player
                            </a>

                        </td>
                    </tr>
                    <?php
                    }
                    }else{
                        ?>
                        <tr><td colspan="4">No data.</td></tr>
<?php
                    }?>




                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
