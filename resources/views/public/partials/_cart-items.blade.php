	<table class="striped bordered">
		<thead>
			<tr>
				<th>Package</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Subtotal</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
	
			@foreach( $items as $item )
	
			<tr>
				<td width="550">
					<div class="row">
						<div class="col m2">
							{!! display($item->options->package->photos, 'materialboxed img-rounded', 100) !!}
						</div>

						<div class="col m9">
							<div class="cart__package">
								<h4 class="cart__package__title">
									<a href="{{ route('package', $item->options->package->slug) }}">
										{{ $item->name }}
									</a>
								</h4>

								<p class="text-muted">
									<i class="fa fa-calendar"></i> 
									{{ $item->options->date }}
									
									@if( $item->options->time )
										- {{ $item->options->time }}
									@endif
								</p>

								<p class="text-muted">
									@if( $item->options->package->confirm_availability )
										* Subject for Availability
									@endif
								</p>

		 						@if( $item->options->child_quantity > 0)

		 							<ul class="collection">
		 								<li class="collection-item">
		 									<strong>Child:</strong>
		 									{{ $item->options->child_quantity }} 
		 									&times; 
		 									{!! convertedAmountWithCurrency($item->options->package->child_price) !!}
		 								</li>
		 							</ul>
								@endif

							</div>
						</div>
					</div>
				</td>

				<td class="nowrap">{!! convertedAmountWithCurrency($item->price) !!}</td>
				
				<td class="nowrap">{{ $item->qty }} </td>
				
				<td class="nowrap">{!! convertedAmountWithCurrency($item->subtotal) !!}</td>

				<td>

					<a class="modal-trigger" href="#item{{ $item->rowid }}">
						<i class="fa fa-pencil"></i> Edit</a>
					</a>

					@if( $route == 'cart' )

						@include('public.cart.edit')
						
					@elseif( $route == 'booking')

						@include('public.booking.edit')

					@endif
				</td>
			</tr>
			@endforeach

		</tbody>	
	
	</table>

	<p>&nbsp;</p>
	
	<h5 class="right">Total: {!! convertedAmountWithCurrency($total) !!}</h5>

	<p>&nbsp;</p>
	<p>&nbsp;</p>

	<p>&nbsp;</p>
	<p>&nbsp;</p>	