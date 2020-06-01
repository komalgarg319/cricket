@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Player</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{asset('home')}}">Home</a></li>
                        <!--<li class="breadcrumb-item active">General Form</li>-->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New team</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{ Form::open(array(
                                        'url' => 'submit-player',
                                        'files'=>true
                                        )) }}
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Player first name</label>
                                    <input type="hidden" class="form-control" id="team_id" name="team_id" placeholder="Enter team name" value="{{$team_id}}">
                                    <input type="text" class="form-control" id="player_f_name" name="player_f_name" placeholder="Enter first name">
                                    @if($errors->has('player_f_name'))
                                        <div class="error">{{ $errors->first('player_f_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Player last name</label>
                                    <input type="text" class="form-control" id="player_l_name" name="player_l_name" placeholder="Enter last name">
                                    @if($errors->has('player_l_name'))
                                        <div class="error">{{ $errors->first('player_l_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Country</label>
                                    <input type="text" class="form-control" id="player_country" name="player_country" placeholder="Enter country">
                                </div>

                                <div class="form-group">
                                    <label for="image">Player image</label>
                                    <?php echo Form::file('image'); ?>
                                    @if($errors->has('image'))
                                        <div class="error">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.card -->




                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
