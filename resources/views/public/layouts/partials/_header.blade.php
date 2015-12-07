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

