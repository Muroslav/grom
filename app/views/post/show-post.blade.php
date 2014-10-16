@extends('layouts.default')
@section('content')
<div class="vessel">
	<article class="post">
	<a href="/">Home</a>/post{{$post->id}}
		<h2 class="post-title">{{$post->title}}</h2>
		<div class="section-title-bottom-line-single"></div>
		<img src="{{$post->preview}}" alt="" class="g_bloc_center">
		@if ($post->body != null)
			<div class="post_content">{{$post->body}}</div>
		@else 
			<div class="post_content">Nety body</div>
		@endif
		<a href="#">{{$post->author}}</a>
	</article>
</div>
@stop