@extends('public.layouts.public')

@section('pageTitle', 'Complete Your Order')

@section('body_class', 'page')

@inject('cart', 'Eclipse\ShoppingCart\ShoppingCart')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Complete Your Order</h1>

				<div class="page__description">
					<div class="row">
						<div class="col s12 m8">

							@if( count($cart) > 0 )

								@include('public.cart._form')
							
							@else
							
								<p>
									<a href="{{ route('packages') }}">Book your package now.</a>
								</p>

							@endif
						</div>

						<div class="col s12 m4">

							@include('public.partials._checkout-items', [
									'items' => $cart->content(), 'total' => $cart->total()
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
