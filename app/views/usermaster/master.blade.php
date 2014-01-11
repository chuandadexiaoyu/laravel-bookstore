<html>
<head>
	<title>
		@section('title')
		{{ $site_title }}
		@show
	</title>
	{{ HTML::style('style/user.css') }}
</head>
<body>

	@yield('content')

	@yield('footer')

	<div class="footer">
		&copy; <?php echo date("Y") ?>. All right reserved.
	</div>
</body>
</html>