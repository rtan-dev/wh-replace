@extends('layouts.default')

@section('content')
<div class="login">
    {{ Form::open(array('url' => 'login', 'class' => 'form-container')) }}
        <div class="inset">
            <h1 class="form-h1">Log In</h1>
            <p>
                <label class="label" for="username">User Name</label>
                {{ Form::text('username', '') }}
            </p>
            <p>
                <label class="label" for="password">Password</label>
                {{ Form::password('password', '') }}
            </p>
        </div>
        <p class="p-container">
            <span>Not a user?{{ HTML::link('register', 'Click Here') }}</span>
            {{ Form::submit('Log In', '') }}
        </p>
        {{ Form::hidden('page_next', 'login_success') }}
    {{ Form::close() }}
</div>
@stop