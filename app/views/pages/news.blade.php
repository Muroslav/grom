@extends('layouts.default')
@section('content')
<div id="vessel" class="vessel">
	<div id="g_add_post">
		<i class="fa fa-pencil"></i>
	</div>
<!-- 
	<a class="loot" href="my_email" rel="victim">rewre</a> -->
		@if (isset($posts) && count($posts)) 
			@foreach($posts as $post)
				<article class="post" id="{{ $post->id }}">
					<h1 class="post-title"><i class="fa fa-check-circle"></i><a href="/post/{{$post->id}}">{{$post->title}}</a></h1>
					<div class="section-title-bottom-line-single"></div>
					<span>{{$post->created_at}} <a href="#2" title="Posts by {{$post->author}}" rel="{{$post->author}}">{{$post->author}}</a></span>
					<div class="section-title-bottom-line-single"></div>
					<div class="post_content">
						<img src="{{$post->preview}}" alt="" class="g_bloc_center img-responsive">
						<hr/>
						@if ($post->body != null)
							<div class="post_content">{{$post->body}}</div>
						@else 
							<div class="post_content">Nety body</div>
						@endif
					</div>
				</article>
			@endforeach
		@else
			<p>Nety posts</p>
		@endif
</div>
@stop