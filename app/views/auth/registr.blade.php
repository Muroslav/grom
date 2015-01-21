@extends('layouts.start')
@section('content')
	{{ Form::open(['files' => true]) }}
	  <h1>Registration</h1>
	  	<p><label>Введіть своє імя:</label>{{ Form::text('name', null, ['placeholder' => 'Вкажіть ваше імя', 'class' => 'g_login']) }}</p>
		<p><label>Введіть e-mail:</label>{{ Form::text('email', null, ['placeholder' => 'email', 'class' => 'g_login']) }}</p>
		<p><label>Введіть пароль:</label>{{ Form::password('password', ['placeholder' => 'пароль', 'class' => 'g_login']) }}</p>
		<p><label>Повторіть пароль:</label>{{ Form::password('repeat_password', ['placeholder' => 'повторіть пароль', 'class' => 'g_login']) }}</p>
		<p><label>Вберіть аватарку:</label><hr/>{{ Form::file('images') }}<hr/><span>Ви можете вибрати як аватарку картинку типу: gif, png, jpeg.</span></p>
		{{ Form::submit('Зареєструватись') }}
		або <a href="/">&larr;Ввійти</a>
	{{ Form::close() }}
 @stop