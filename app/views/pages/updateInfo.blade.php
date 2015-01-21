@extends('layouts.default')
@section('content')
	<div id="settings">
	{{ Form::open(['files' => true, 'class' => 'infoForm']) }}
	<h1>Особисті дані:</h1>
		<label>Ім'я: <span>{{ Auth::user()->id }}</span> </label><br/>
		<label>Ім'я: <span>{{ Auth::user()->name }}</span> </label><br/>
		<label>Прізвище: <span>{{ Auth::user()->name }}</span> </label><br/>
		<label>Побатькові: <span>{{ Auth::user()->name }}</span> </label><br/>
		<label>Ваш емайл адрес: <span>{{ Auth::user()->email }}</span> </label><br/>
		<label>номер телефона: <span>{{ Auth::user()->name }}</span> </label><br/>
		<label>Ваша IP адрес: <?php echo $_SERVER['REMOTE_ADDR'];?></label><br/>

		<img src="assets/tmp/{{ Auth::user()->images }}"><br/>
		{{ Form::file('images', ['id' => 'imageControl']) }}
		{{ Form::submit('Змінити аватар') }}

	{{ Form::close() }}
	</div>
@stop