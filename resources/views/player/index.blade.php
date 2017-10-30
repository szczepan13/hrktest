@extends('main')

@section('title', '| All Players')

@section('content')


    <div>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


        <div style="padding:20px;">
            <a href="{{ route('player.create', $team_id) }}">Create Player </a>
        </div>

        <table class="table">
            <thead>
            <th>#</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Delete</th>
            </thead>

            <tbody>

            @foreach($players as $player)

                <tr>
                    <th>{{ $player->id }}</th>
                    <td>{{ $player->name }}</td>
                    <td>{{ date('M j, Y', strtotime($player->created_at)) }}</td>
                    <td> <a href="{{ route('player.destroy', $player->id) }}">Delete</a></td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>


