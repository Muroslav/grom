<div class="g-container">
		<!-- {{ HTML::image('assets/thumbs/Gromgosh.png', 'thumb', array('class' => 'logo')); }} -->
	<div class="g_person">
		<div class="g_person_menu">
			@if (Auth::check())
				@if (Auth::user()->images == null)
					{{ HTML::image('assets/thumbs/no-foto.png', 'thumb', array('class' => 'thumb')); }}
				@else
					<img src="/assets/tmp/{{ Auth::user()->images }}" class="thumb">
				@endif
				@else
					Чота пошло нетак
				@endif
			<div class="g_profile_name">
				@if (Auth::check())
					<a class="g_info_about_person loot" href="/settings" rel="settings">
						<span>{{ Auth::user()->name }}</span>
					</a>
				@else
					Чота пошло нетак
				@endif
				<div class="g_add_post">
					<i class="fa fa-envelope-o"></i>
				</div>
				<div class="g_logout">
				<a href="/logout">
					<i class="fa fa-power-off"></i>
				</a>
			</div>	
			</div>
		</div>
	</div>
	{{ Form::open(['class' => 'postForm']) }}
		{{ Form::text('title', null, ['placeholder' => 'заголовок поста', 'autocomplete' => 'off', 'class' => 'postInput']) }}
		{{ Form::textarea('body', null, ['placeholder' => 'body поста', 'autocomplete' => 'off', 'class' => 'postInput']) }}
		{{ Form::submit('Добавити', ['class' => 'gbut']) }}
		{{ Form::reset('Очистити', ['class' => 'gbut']) }}
	{{ Form::close() }}

</div>


