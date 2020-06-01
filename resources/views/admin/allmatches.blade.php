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
                    <a href="{{asset('match-fixture')}}" class="btn btn-secondary btn-success">Matches fixtures</a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>

                        <th style="width: 25%">
                            Match Number
                        </th>
                        <th style="width: 25%">
                            First Team
                        </th>
                        <th style="width: 25%">
                            Sec Team
                        </th>
                        <th style="width: 25%">
                            winner
                        </th>
                        <th style="width: 25%"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($matches)){
                    foreach ($matches as $match)
                    {
                    ?>
                    <tr>
                        <td>
                            {{$match->id}}
                        </td>
                        <td>
                            <a href="{{asset('team/'.$match->team_one.'/admin')}} ">
                                {{$match->team_one_name}}
                            </a>
                        </td>
                        <td>
                            <a href="{{asset('team/'.$match->team_two.'/admin')}}">
                                {{$match->team_two_name}}
                             </a>
                        </td>
                        <td><?php
                            if($match->team_winner_name != NULL && $match->team_winner_name != '0'){
                                ?>
                            <a href="{{asset('team/'.$match->winner.'/admin')}}">
                                {{$match->team_winner_name }}
                            </a>
                         <?php
                            }else{
                                echo 'Match Draw';
                            }
                            ?>

                        </td>

                        <td class="project-actions text-right">
                            <!--<a class="btn btn-primary btn-sm" href="">
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
                            </a>-->
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
