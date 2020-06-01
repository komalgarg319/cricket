@extends('layouts.app')
@section('content')

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pages</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="teams"> Teams </a> </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a href="match-records">Matches</a></td>
            </tr>
            </tbody>
        </table>
@endsection
