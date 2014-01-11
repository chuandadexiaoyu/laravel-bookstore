@extends('adminmaster.master')

@section('content')

@unless($categories->isEmpty())
	
	<ul>
		@foreach($categories as $categoryname)
			<li title="{{ $categoryname->remark }}">
				[ <a href="{{ URL::to('admin/cat-edit/') }}/{{ $categoryname->id }}">Edit</a> ]
				[ <a href="{{ URL::to('admin/cat-del/') }}/{{ $categoryname->id }}">Delete</a> ]
				{{ $categoryname->name }}
			</li>
		@endforeach
	</ul>
@else
<h4>Doesn't have any category!</h4>
@endif

<a href="{{ URL::to('admin/cat-add') }}" class="new">Add New Category</a>

@stop