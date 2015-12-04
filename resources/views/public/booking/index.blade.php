@extends('public.layouts.public')

@section('pageTitle', 'You Bookings')

@section('body_class', 'page')

@inject('cart', 'Eclipse\ShoppingCart\ShoppingCart')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Bookings</h1>

				<div class="page__description">

					@if( $cart->countBooking() > 0 )

						<div class="cart">
							
							@include('public.partials._cart-items', [
									'items' => $cart->contentBooking(), 'total' => $cart->totalBooking(), 'route' => 'booking' ])

							<div class="row">
								<div class="col s6 m3">
									<p class="center-content">
										<a href="{{ route('packages') }}" class="btn-flat center-content">
											<i class="fa fa-plus"></i> Add Package
										</a>
									</p>
								</div>

								<div class="col s6 m3 offset-m6">
								
									<p class="center-content">
										<a href="{{ route('booking.checkout') }}" class="btn btn-large waves-effect waves-light green full-width">
											Checkout
										</a>
									</p>

								</div>
							</div>


						</div>
					
					@else

						<p>
							You don't have an item in your booking.
							<a href="{{ route('packages') }}">Book a package now.</a>
						</p>

					@endif
				</div>

			</div>
		</div>
	</div>
@endsection