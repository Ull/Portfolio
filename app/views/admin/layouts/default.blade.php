<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel test</title>

	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/foundation.css') }}
	{{ HTML::style('css/app.css') }}

	{{ HTML::script('js/vendor/modernizr.js'); }}
</head>
<body>

	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1><a class="brand" href="{{ URL::route('admin.pages.index') }}">Admin index</a></h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Left Nav Section -->
			<ul class="left">
			  	@yield('admin._partials.navigation')
			</ul>
		</section>
	</nav>

	<section role="main">
		<div class="row">
			@yield('main')
		</div>
	</section>

	{{ HTML::script('js/vendor/jquery.js'); }}
	{{ HTML::script('js/foundation/foundation.js'); }}
	<script>
		$(document).foundation();
	</script>
</body>
</html>