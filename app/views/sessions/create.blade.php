@extends('layouts.master')

@section('content')

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{{ Form::open(array('route' => 'sessions.store')) }}
<ul>
    <li>
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', null, array('class' => 'list-group-item-text')) }}
    </li>

    <li>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
    </li>

    <li>
        {{ Form::submit() }}
    </li>

</ul>
{{ Form::close() }}

@stop