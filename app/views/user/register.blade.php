@extends('layouts.default')

@section('content')
<div class="register">
	{{ Form::open(array('url' => 'register', 'class' => 'register-container')) }}
	    <div class="inset">
	        <h1 class="form-h1">Register</h1>
	        <p>
	            <label class="label" for="username">User Name</label>
	            {{ Form::text('username', '') }}
	        </p>
	        <p>
	            <label class="label" for="password">Password</label>
	            {{ Form::password('password', '') }}
	        </p>
	        <p>
	            <label class="label" for="email">E-mail</label>
	            {{ Form::text('email', '') }}
	        </p>
	        {{ Form::hidden('page_next', 'register_end') }}
	        <p class="p-container">
	        	{{ Form::submit('Submit') }}
	            <span>{{ HTML::link('login', 'Back') }}&nbsp; to Log In</span>
	        </p>
	    </div>
	{{ Form::close() }}
</div>
@stop