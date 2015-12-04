@extends('public.layouts.public')

@section('pageTitle', 'Shopping Cart')

@section('body_class', 'page')

@inject('cart', 'Eclipse\ShoppingCart\ShoppingCart')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Shopping Cart</h1>

				<div class="page__description">

					@if( $cart->count() > 0 )

						<div class="cart">

							@include('public.partials._cart-items', [
									'items' => $cart->content(), 'total' => $cart->total(), 'route' => 'cart' ])

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
										<a href="{{ route('cart.checkout') }}" class="btn btn-large waves-effect waves-light green full-width">
											Checkout
										</a>
									</p>
								</div>
							</div>					
						</div>
					
					@else

						<p class="">
							You don't have an item in your cart.
							<a href="{{ route('packages') }}">Book a package now.</a>
						</p>

					@endif
				</div>

			</div>
		</div>
	</div>
@endsection