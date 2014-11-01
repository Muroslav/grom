@extends('layouts.default')
@section('content')
<div class="vessel">
	<div id="news">
		@if (isset($posts) && count($posts)) 
			@foreach($posts as $post)
				<li class="post" id="{{ $post->id }}">
					<div class="post-from">
						{{ HTML::image('assets/thumbs/no-foto.png', 'thumb'); }}
						<a href="#2" class="post-author" title="Posts by {{$post->author}}" rel="{{$post->author}}">{{$post->author}}</a>
					</div>
					<div class="post-data">
						<h2 class="post-title">
							<a href="/post/{{$post->id}}">{{$post->title}}</a>
						</h2>
						<div class="section-title-bottom-line-single"></div>
							<span>Пост добавлено: {{$post->created_at}}</span>
						<div class="section-title-bottom-line-single"></div>
						@if ($post->body != null)
							<div class="post_content">{{$post->body}}</div>
						@else 
							<div class="post_content">Nety body</div>
						@endif
					</div>
				</li>
			@endforeach
		@else
			<div class="post">Nety posts</div>
		@endif
	</div>
</div>
@stop