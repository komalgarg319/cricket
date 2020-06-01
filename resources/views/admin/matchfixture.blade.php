@extends('layouts.admin')

@section('content') <?php //echo '<pre>';print_r($matches);die;?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Match list</h1>
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
                <h3 class="card-title">Matches</h3>

                <div class="card-tools">
                    <a href="match-fixture" class="btn btn-secondary btn-success">Matches fixtures</a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>

                        <th style="width: 20%">
                            #
                        </th>
                        <th style="width: 10%">
                            First Team
                        </th>
                        <th style="width: 10%">
                            Sec Team
                        </th>
                        <th style="width: 30%"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    if(!empty($team1) && !empty($team2) ){
                        ?>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <?php echo $team1['team_name']; ?>
                        </td>
                        <td>
                            <?php echo $team2['team_name']; ?>
                        </td>


                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href='set-runs?team1={{$team1['id']}}&team2={{$team2['id']}}'>
                                <i class="fas fa-folder">
                                </i>
                                play
                            </a>
                           <!-- <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>-->
                        </td>
                    </tr>

<?php } ?>



                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
