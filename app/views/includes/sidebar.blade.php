<div id="g_hover_menu">
	<i class="fa fa-bars"></i>
</div>

<div id="sidebar" >
<div class="g_profile">
	{{ HTML::image('assets/thumbs/Gromgosh.png', 'thumb', array('class' => 'thumb')); }}
	<div class="g_profile_name">
		<h1>Gromgosh</h1>

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
