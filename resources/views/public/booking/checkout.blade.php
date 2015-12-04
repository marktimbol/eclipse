@extends('public.layouts.public')

@section('pageTitle', 'Complete Your Booking')

@section('body_class', 'page')

@inject('cart', 'Eclipse\ShoppingCart\ShoppingCart')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Complete Your Booking</h1>

				<div class="page__description">
					<div class="row">
						<div class="col s12 m8">

							@if( count($cart) > 0 )

								@include('public.booking._form')
							
							@else
							
								<p>
									<a href="{{ route('packages') }}">Book your package now.</a>
								</p>

							@endif
						</div>

						<div class="col s12 m4">

							@include('public.partials._checkout-items', [
									'items' => $cart->contentBooking(), 'total' => $cart->totalBooking()
									])

							@include('public.partials._needhelp')

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
