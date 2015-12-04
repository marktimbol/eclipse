<div class="orders card-panel">

	<h5 class="mb-35 orders__title">You Booked</h5>

	<?php
		$subtotal = 0;
		$total = 0;
	?>

	@foreach( $items as $item )

		<div class="order">
			<div class="order__image">
				<a href="{{ route('package', $item->slug) }}">
					{!! display($item->photos, 'img-rounded', 70) !!}
				</a>
			</div>

			<div class="order__body">
				<h5 class="order__title">{{ $item->name }}</h5>
				<h6 class="order__price">{!! convertedAmountWithCurrency($item->adult_price) !!}</h6>
				<p>
					<strong>Adult:</strong> {{ $item->pivot->adult_quantity }}<br />
					<strong>Child:</strong> 
					{{ $item->pivot->child_quantity }} 
						&times; 
					{!! convertedAmountWithCurrency($item->child_price) !!}
				</p>
			</div>
		</div>

		<?php
			$subtotal = ( $item->adult_price * $item->pivot->adult_quantity ) + 
						( $item->child_price * $item->pivot->child_quantity );

			$total += $subtotal;

		?>		
	@endforeach

	<hr />

	<h5 class="orders__total">Total: {!! convertedAmountWithCurrency($total) !!}</h5>

</div>