<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<div id="grom">
		<header id="header">
			@include('includes.header')
		</header>
		<div id="content" class="g-container">
			@include('includes.sidebar')
			<div class="vessel">
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>