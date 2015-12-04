@extends('public.layouts.public')

@section('pageTitle', 'Complete Your Booking')

@section('body_class', 'page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Complete Your Booking</h1>

				<div class="page__description">
					<div class="row">

						<div class="col s12 m8">

							@include('public.booking._booking-payment-form')
						
						</div>

						<div class="col s12 m4">

							@include('public.partials._booked-items', [
									'items' => $packages
									])

							@include('public.partials._needhelp')

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	
	@if( env('PAYMENT_GATEWAY') == 'stripe' )
	
		<script src="https://js.stripe.com/v2/"></script>
		<script src="{{ elixir('js/stripe-billing.js') }}"></script>
	
	@elseif( env('PAYMENT_GATEWAY') == 'twocheckout' )

		<script src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
		<script src="{{ elixir('js/twocheckout-billing.js') }}"></script>

	@endif
	
@endsection
