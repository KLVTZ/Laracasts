@extends ('layouts.master')

@section('content')
	@if ($orders->count())
		@foreach($orders as $order)
			<div class='order'>
				<a href='{{ link_to_route('orders.show', ['order_id' => $order->id]) }}'>
					<img src='{{ $order->image; }}' alt='{{ $post->title; }}' />
				</a>
				<h2>{{ $order->title; }}</h2>
				<p>{{ $order->description; }} </p>
			</div>
			<hr />
		@endforeach
	@else
		<p>No orders found.</p>
	@endif
@stop

