<div class="orders card-panel">

	<h5 class="mb-35 orders__title">Your Orders 
		<span class="edit-cart float-right">
			<a href="{{ route('booking.index') }}" title="Edit cart">
				<i class="fa fa-pencil"></i>
			</a>
		</span>
	</h5>
	
	@foreach( $items as $item )
		<div class="order">
			<div class="order__image">
				<a href="{{ route('package', $item->options->package->slug) }}">
					{!! display($item->options->package->photos, 'img-rounded', 70) !!}
				</a>
			</div>

			<div class="order__body">
				<h5 class="order__title">{{ $item->name }}</h5>
				<h6 class="order__price">{!! convertedAmountWithCurrency($item->price) !!}</h6>
				<p>
					<strong>Adult:</strong> {{ $item->qty }}<br />
					<strong>Child:</strong> 
					{{ $item->options->child_quantity }} 
						&times; 
					{!! convertedAmountWithCurrency($item->options->package->child_price) !!}
				</p>
			</div>
		</div>
	@endforeach

	<hr />

	<h5 class="orders__total">Total: {!! convertedAmountWithCurrency($total) !!}</h5>

</div>