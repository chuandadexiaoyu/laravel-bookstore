@extends('adminmaster.master')

@section('content')

<h1>New Book</h1>

{{ Form::open(array('url' => URL::current(), 'files' => true)) }}

	{{ Form::label('title', 'Book Title') }}
	{{ Form::text('title', $book->title) }}

	{{ Form::label('author', 'Author') }}
	{{ Form::text('author', $book->author) }}

	{{ Form::label('summary', 'Summary') }}
	{{ Form::textarea('summary', $book->summary) }}

	{{ Form::label('price', 'Price') }}
	{{ Form::text('price', $book->price) }}

	{{ Form::label('categories', 'Category') }}	
	{{ Form::select('category_id', $categories) }}


	{{ Form::label('cover', 'Cover') }}
	{{ Form::file('file') }}

	<br><br>
	<input type="submit" value="Add Book">

{{ Form::close() }}

@stop

