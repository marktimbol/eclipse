<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>
<body>

	<div class="container">
		<div class="row">

			<h1>Booking confirmation</h1>
		
			<table class="table striped bordered">
				<thead>
					<tr>
						<th>Package</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Subtotal</th>
					</tr>
				</thead>

				<tbody>
					<?php
						$subtotal = 0;
						$total = 0;
					?>
					@foreach( $data as $item )
					<tr>
						<td width="550">
							<div class="row">
								<div class="col m9">
									<div class="cart__package">
										<h4 class="cart__package__title">
											<a href="{{ route('package', $item['slug']) }}">
												{{ $item['name'] }}
											</a>
										</h4>

										<p class="text-muted">
											<i class="fa fa-calendar"></i> 
											{{ $item['pivot']['date'] }}
										</p>

				 						@if( $item['pivot']['child_quantity'] > 0)

				 							<ul class="collection">
				 								<li class="collection-item">
				 									<strong>Child:</strong>
				 									{{ $item['pivot']['child_quantity'] }} &times; 
				 									{!! convertedAmountWithCurrency($item['child_price']) !!}
				 								</li>
				 							</ul>

										@endif

									</div>
								</div>
							</div>
						</td>

						<td class="nowrap">{!! convertedAmountWithCurrency($item['adult_price']) !!}</td>
						
						<td class="nowrap">{{ $item['pivot']['adult_quantity'] }} </td>
						
						<?php
							$subtotal = ( $item['adult_price'] * $item['pivot']['adult_quantity'] ) + 
										( $item['child_price'] * $item['pivot']['child_quantity'] );

							$total += $subtotal;

						?>
						<td class="nowrap">{!! convertedAmountWithCurrency($subtotal) !!} </td>

					</tr>
					
					@endforeach

				</tbody>	
			
			</table>

			<p>&nbsp;</p>

			<h5 class="right">Total: {!! convertedAmountWithCurrency($total) !!}</h5>

			<p>&nbsp;</p>
			<p>&nbsp;</p>

			<p class="text-center">
				<a href="{{ route('booking.payment', session('booking_reference')) }}" 	class="btn btn-success btn-lg">
					Pay my booking now
				</a>
			</p>
		</div>
	</div>
</body>
</html>