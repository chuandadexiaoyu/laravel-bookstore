@extends('adminmaster.master')

@section('content')

<h1>Create Category</h1>
	
{{ Form::open(array('url' => URL::current())) }}

	{{ Form::label('name', 'Category Name') }}
	{{ Form::text('name', $category->name) }}

	{{ Form::label('remark', 'Remark') }}
	{{ Form::textarea('remark', $category->remark) }}
	<br><br>

	<input type="submit" value="Add Category">

{{ Form::close() }}

@stop