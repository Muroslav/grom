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
			@yield('content')
		</div>
	</div>
</body>
</html>