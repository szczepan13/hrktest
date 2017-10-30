@extends('main')

@section('title', '| All Teams')

@section('content')


    <div>

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


        <div style="padding:20px;">
            <a href="{{ route('team.create') }}">Create Team </a>
        </div>

        <table class="table">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Delete</th>
                <th>View/Add Players</th>
            </thead>

            <tbody>

            @foreach($teams as $team)

            <tr>
                <th>{{ $team->id }}</th>
                <td>{{ $team->name }}</td>
                <td>{{ date('M j, Y', strtotime($team->created_at)) }}</td>
                <td> <a href="{{ route('team.destroy', $team->id) }}">Delete</a></td>
                <td> <a href="{{ route('player.index', $team->id) }}">View/Add Players</a></td>
            </tr>

            @endforeach

            </tbody>
        </table>
    </div>


