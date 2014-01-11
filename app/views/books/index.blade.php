@extends('adminmaster.master')

@section('content')

<h1>Manage Books</h1>

@unless($allbook->isEmpty())

<ul>
	@foreach($allbook as $books)
	<div class="list">
		<li>
			<img src="../covers/{{ $books->cover }}" alt="" align="right" height="140">
			<b>{{ $books->title }}</b>
			<i>{{ $books->author }}</i>
			<small>{{ $books->name }}</small>
			<span>{{ $books->price }}</span>
			<div>{{ $books->summary }}</div>
			[ <a href="{{ URL::to('admin/book-edit/') }}/{{ $books->id }}">Edit</a> ]
			[ <a href="{{ URL::to('admin/book-del/') }}/{{ $books->id }}">Del</a> ]
		</li>
	</div>
	@endforeach
</ul>

@else
<h4>Doesn't have any books for now!</h4>
@endif

<a href="{{ URL::to('admin/book-add') }}" class="new">Add New Book</a>

@stop

