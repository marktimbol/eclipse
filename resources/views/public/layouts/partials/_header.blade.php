@inject('categories', 'Eclipse\Repositories\Category\CategoryRepositoryInterface')

<div class="fixed-action-btn mobile-menu">
	<button id="trigger-overlay" type="button" class="btn-floating btn-medium transparent">
		<i class="fa fa-bars"></i>
	</a>
</div>	

<header>
	<div class="row no-margin-bottom">
		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper">
					<div class="menu top-menu right hide-on-small-and-down">
						<ul class="menu">
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('packages') }}">Packages</a>
								<div class="mega-menu">
									<div class="row">
										@foreach( $categories->all() as $category )
											@foreach( $category->photos as $photo )
												<?php
													$photoPath = $photo->path;
												?>
											@endforeach										
											<div class="col m3">
												<div class="card">
													<div class="card-image card__image">
														<a href="{{ route('category', $category->slug) }}">
															{!! photoUrl($photoPath) !!}
														</a>
														<span class="card-title card__title">{{ $category->name }}</span>
													</div>
												</div>			
											</div>
										@endforeach
									</div>
								</div>
							</li>
							<li><a href="{{ route('deals') }}">Deals</a></li>
							<li><a href="{{ route('tourist-information') }}">Tourist Info</a></li>
							<li><a href="{{ route('corporate') }}">Corporate</a></li>
							<li><a href="{{ route('about') }}">About</a></li>
							<li><a href="{{ route('contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
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

