@extends('layouts.start')
@section('content')
	
	{{ Form::open(array('url' => 'user/register')) }}
         
	{{ Form::label('email', 'E-Mail Address') }}
	{{ Form::text('email') }}
	{{ $errors->first('email') }}

	{{ Form::label('name', 'Your name') }}
	{{ Form::text('name') }}
	{{ $errors->first('name') }}

	{{ Form::label('password', 'Password') }}
	{{ Form::password('password') }}
	{{ $errors->first('password') }}

	{{ Form::label('password_confirmation', 'Repeat') }}
	{{ Form::password('password_confirmation') }}

	<div class="form-actions">
	{{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
	</div>

	{{ Form::close() }}
	
@stop