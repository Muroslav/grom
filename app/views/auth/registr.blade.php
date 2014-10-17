@extends('layouts.start')
@section('content')


	{{ Form::open() }}
	  <h1>Registration</h1>
		{{ Form::text('email', null, ['placeholder' => 'email', 'class' => 'startInput']) }}
		{{ Form::password('password', ['placeholder' => 'пароль', 'class' => 'startInput']) }}
		{{ Form::password('repeat_password', ['placeholder' => 'повторіть пароль', 'class' => 'startInput']) }}
		{{ Form::submit('Зареєструватись') }}
		або <a href="/">&larr;Ввійти</a>
	{{ Form::close() }}
 @stop