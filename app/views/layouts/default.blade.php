<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header id="header">
		@include('includes.header')
	</header>
		<div id="content" class="grid">
			<section  class="gm-2">
				@include('includes.sidebar')
			</section>
			<section id="two_part" class="gm-4">
				@yield('content')
			</section>
		</div>
		<footer id="footer">
			<div class="grid">
				@include('includes.footer')
			</div>
		</footer>
</body>
</html>