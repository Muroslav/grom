@extends('layouts.default')
@section('content')
<div class="post">
<h2>Oooopss!!</h2>
	@if(isset($errors))
		@foreach($errors as $error)
			<strong>{{ $error[0] }}</strong><br />
		@endforeach
	@else
		<h3>Нема помилок!!</h3>
	@endif
	<a href="{{ URL::previous() }}">&larr; назад</a>
	</div>
@stop