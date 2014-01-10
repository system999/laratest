@extends('layouts.master')

@section('content')

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

{{ Form::open(array('route' => 'users.store')) }}
<ul>
    <li>
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', null, array('class' => 'list-group-item-text')) }}
    </li>

    <li>
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email') }}
    </li>

    <li>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
    </li>

    <li>
        {{ Form::label('password_confirmation', 'Password Confirmation:') }}
        {{ Form::password('password_confirmation') }}
    </li>

    <li>
        {{ Form::submit() }}
    </li>

</ul>
{{ Form::close() }}

@stop