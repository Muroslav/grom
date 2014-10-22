@extends('layouts.start')
@section('content')
		{{ Form::open([ 'url' => '/login' ]) }}
		<h1>Sign in</h1>
			<p><label>Ваш e-mail: </label>{{ Form::text('email', null, ['placeholder' => 'email', 'class' => 'g_login']) }}</p>
			<p><label>Ваш пароль: </label>{{ Form::password('password', ['placeholder' => 'пароль', 'class' => 'g_login']) }}</p>
		{{ Form::submit('Sign in') }}
		або <a href="registration">&larr;Зереєструватись</a>
		{{ Form::close() }}
@stop