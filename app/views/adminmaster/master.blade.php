<html>
<head>
	<title>
		@section('title')
		{{ $site_title }}
		@show
	</title>
	{{ HTML::style('style/style.css') }}
	<style type="text/css">
		form label {
			display: block;
			margin-top: 8px;
		}
	</style>
</head>
<body>
	<ul class="menu">
		<li><a href="{{ URL::to('/admin/book-list') }}">Manage Books</a></li>
		<li><a href="{{ URL::to('/admin/cat-list') }}">Manage Categories</a></li>
		<li><a href="#">Manage Orders</a></li>
		<li><a href="#">Logout</a></li>
	</ul>
	@yield('content')
</body>
</html>