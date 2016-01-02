@inject('categories', 'Eclipse\Repositories\Category\CategoryRepositoryInterface')

<div class="fixed-action-btn mobile-menu">
	<button id="trigger-overlay" type="button" class="btn-floating btn-medium transparent">
		<i class="fa fa-bars"></i>
	</a>
</div>	

<header>
	<div class="row no-margin-bottom">
		<main-menu :categories="categories"></main-menu>
	</div>

	@if( $showLogo )

		<div id="topLeftCorner" 
			style="background-image: url({{ asset('images/top-left-corner.png') }});"
		>
		</div>		

		<div class="logo">
			<a href="{{ route('home') }}">
				{!! getPhoto('logo.png', companyName(), '') !!}
			</a>
		</div>
	@endif	

</header>

{{-- <div id="cd-cart">
	<h2>Cart</h2>
	<ul class="cd-cart-items">
		<li>
			<span class="cd-qty">1x</span> Product Name
			<div class="cd-price">$9.99</div>
			<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
		</li>

		<li>
			<span class="cd-qty">2x</span> Product Name
			<div class="cd-price">$19.98</div>
			<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
		</li>

		<li>
			<span class="cd-qty">1x</span> Product Name
			<div class="cd-price">$9.99</div>
			<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
		</li>
	</ul> <!-- cd-cart-items -->

	<div class="cd-cart-total">
		<p>Total <span>$39.96</span></p>
	</div> <!-- cd-cart-total -->

	<a href="#0" class="checkout-btn">Checkout</a>
	
	<p class="cd-go-to-cart"><a href="#0">Go to cart page</a></p>
</div> --}}

