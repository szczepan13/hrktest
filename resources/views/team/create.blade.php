

@extends('main')

@section('title', '| Create Teams')

@section('content')

    <div class="row">
            <h1>Create Team</h1>
            <hr>
            {!! Form::open(array('route' => array('team.store',$team_id), 'data-parsley-validate' => '', 'files' => true)) !!}
            {{ Form::label('name', 'name:') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::submit('Create Team', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection