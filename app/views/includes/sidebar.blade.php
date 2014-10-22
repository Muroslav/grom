<div id="g_hover_menu">
	<i class="fa fa-bars"></i>
</div>

<div id="sidebar" >
<div class="g_profile">
		@if (Auth::check())
			@if (Auth::user()->images == null)
				{{ HTML::image('assets/thumbs/images.jpeg', 'thumb', array('class' => 'thumb')); }}
			@else
				<img src="assets{{ Auth::user()->images }}" class="thumb">
			@endif
		@else
			Чота пошло нетак
		@endif
	<!-- {{ HTML::image('assets/thumbs/Gromgosh.png', 'thumb', array('class' => 'thumb')); }} -->
	<div class="g_profile_name">
		@if (Auth::check())
			<h1>{{ Auth::user()->name }}</h1>
		@else
			Чота пошло нетак
		@endif


		@if(Auth::check())
		
			<span class="online"></span>
			<p class="g_status">Online</p>
			
		@else
		
			<span class="ofline"></span>
			<p class="g_status">Ofline</p>
			
		@endif
		<span class="userEmail">
		@if (Auth::check())
			{{ Auth::user()->email }}
		@else
			Чота пошло нетак
		@endif
		
		</span>
	</div>
</div>
<div id="g_add_post">
	<i class="fa fa-pencil"></i>Написати свій пост
</div>
{{ Form::open(['class' => 'postForm']) }}
	{{ Form::text('title', null, ['placeholder' => 'заголовок поста', 'autocomplete' => 'off', 'class' => 'postInput']) }}
	{{ Form::textarea('body', null, ['placeholder' => 'body поста', 'autocomplete' => 'off', 'class' => 'postInput']) }}
	{{ Form::submit('Добавити') }}
	{{ Form::reset('Очистити') }}
{{ Form::close() }}
