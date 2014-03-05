@extends('admin.layouts.default')

@section('main')

	<fieldset id="login" class="login medium-4 medium-offset-4 columns">
		<legend>Login</legend>

		{{ Form::open(['class' => 'no-margin']) }}

			@if ($errors->has('login'))
				<div class="alert-box warning">{{ $errors->first('login', ':message') }}</div>
			@endif

			{{ Form::label('email', 'Email') }}
			{{ Form::text('email') }}

			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}

			{{ Form::submit('Login', array('class' => 'button expand no-margin')) }}

		{{ Form::close() }}
	</fieldset>
 @stop