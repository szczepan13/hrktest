

@extends('main')

@section('title', '| Create Player')

@section('content')

    <div class="row">
        <h1>Create Player</h1>
        <hr>
        {!! Form::open(array('route' => array('player.store', $team_id), 'data-parsley-validate' => '', 'files' => true)) !!}
        {{ Form::label('name', 'name:') }}
        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

        {{ Form::label('familyname', 'family name:') }}
        {{ Form::text('familyname', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

        {{ Form::label('age', 'age:') }}
        {{ Form::text('age', null, array('class' => 'form-control', 'maxlength' => '255')) }}


        {{ Form::submit('Create Player', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
        {!! Form::close() !!}
    </div>
    </div>

@endsection