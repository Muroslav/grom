@extends('layouts.default')
@section('content')
<div class="vessel">
	@if (isset($posts) && count($posts)) 
		@foreach($posts as $post)
			<article class="post" id="{{ $post->id }}">
				<h1 class="post-title"><i class="fa fa-check-circle"></i>{{$post->title}}</h1>
				<div class="section-title-bottom-line-single"></div>
				<span>{{$post->created_at}} <a href="#2" title="Posts by {{$post->author}}" rel="{{$post->author}}">{{$post->author}}</a></span>
				<div class="section-title-bottom-line-single"></div>
				<div class="post_content">
					<p>{{$post->preview}}</p>
					<hr/>
					<p>{{$post->body}}.</p> 
				</div>
			</article>
		@endforeach
	@else
		<p>Nety posts</p>
	@endif
</div>
@stop