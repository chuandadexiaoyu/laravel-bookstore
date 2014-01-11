@extends('usermaster.master')

@section('content')

<h1>Hello Store</h1>

	<div class="info">
		<a href="{{URL::to('/viewcart')}}">Books in Your cart	{{ $cart = 0 }} </a>
	</div>

	@unless($all_categories->isEmpty())
	<div class="sidebar">
		<ul class="cats">
			<li>
				<b><a href="{{ URL::to('/') }}">All Categories</a></b>
			</li>

			@foreach($all_categories as $category)
			<li>
				<a href="category/{{ $category->id }}">{{ $category->name }}</a>
			</li>
			@endforeach

			<li>
				<a href="{{ URL::to('/category/0') }}">Uncategory</a>
			</li>
		</ul>
	</div>
	@else
			<h4>Doesn't have any Categories for now!</h4>
	@endif

	@unless($allbooks->isEmpty())
	<div class="main">
		<ul class="books">
			@foreach($allbooks as $books)
				<li>
					<img src="../covers/{{ $books->cover }}" alt="" align="right" height="140">
					<a href=""><b>{{ $books->title }}</b></a>
					<span>{{ $books->price }}</span>
					<a href="{{ URL::to('/') }}" class="add-to-cart">Add to Cart</a>
				</li>
			@endforeach
			
		@else
			<h4>Doesn't have any books for now!</h4>
		@endif
		</ul>
	</div>

	@yield('footer')

@stop