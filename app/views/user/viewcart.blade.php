@extends('usermaster.master')

@section('content')
	
	<h1>View Cart</h1>
	<div class="sidebar">
		<ul class="cats">
			<li><a href="{{URL::to('/
			<li><a href="#">Clear Cart</a></li>
		</ul>
	</div>

	<div class="main">
		
		<table>
			<tr>
				<th>Book Title</th>
				<th>Quantity</th>
				<th>Unit Price</th>
				<th>Price</th>
			</tr>

			<tr>
				<td>Title</td>
				<td>Qty</td>
				<td>UPrice</td>
				<td>Price</td>
			</tr>

			<tr>
				<td colspan="3" align="right"><b>Total:</b></td>
				<td>TotalPrice</td>
			</tr>
		</table>

		<div class="order-form">
			<h2>Order Now</h2>
			{{ Form::open(array('url' => URL::current())) }}

			{{ Form::label('name', 'Your Name') }}
			{{ Form::text('name') }}

			{{ Form::label('email', 'Email') }}
			{{ Form::text('email') }}

			{{ Form::label('phone', 'Phone') }}
			{{ Form::text('phone') }}

			{{ Form::label('address', 'Address') }}
			{{ Form::text('address') }}

			<br><br>
			<input type="submit" value="Submit Order">

			<a href="{{ URL::to('/') }}">Continue Shopping</a>
			{{ Form::close() }}
		</div>

	</div>

	@yield('footer')

@stop