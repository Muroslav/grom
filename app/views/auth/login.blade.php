@extends('layouts.start')
@section('content')
		{{ Form::open([ 'url' => '/login' ]) }}
			Ваш e-mail: {{ Form::text('email', null, ['placeholder' => 'email', 'class' => 'startInput']) }}
			Ваш пароль: {{ Form::password('password', ['placeholder' => 'пароль', 'class' => 'startInput']) }}
		{{ Form::submit('Sign in') }}
		або <a href="registration">&larr;Зереєструватись</a>
		{{ Form::close() }}
@stop