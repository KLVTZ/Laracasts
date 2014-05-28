@extends ('layouts.master')

@section('content')
	@if ($order)
		<div class='order'>
			<a class='left-col' href='{{ route('orders.show', $order->id) }}'>
				{{ HTML::image($order->image, $order->title) }}
			</a>
			<div class='post'>
				<a href='{{ route('orders.show', $order->id) }}'>
					<h2>{{ $order->title; }}</h2>
				</a>
				<p>{{ $order->description; }} </p>
			</div>
		</div>
		{{ link_to_route('orders.edit', 'Edit Order', $order->id) }}
	@else
		<p>No order found.</p>
	@endif
@stop

