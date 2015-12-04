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

										@foreach( $categories->all()->chunk(3) as $categories )
											
											@foreach( $categories as $category )

												<div class="col m4">
													<h4>{{ $category->name }}</h4>

													<ol>
														@foreach( $category->packages as $package )
															<li>
																<a href="{{ route('package', $package->slug) }}">
																	{{ $package->name }}
																</a>
															</li>
														@endforeach
													</ol>

												</div>

											@endforeach

											<div class="clearfix"></div>

										@endforeach

									</div>
								</div>
							</li>
							<li><a href="{{ route('deals') }}">Deals</a></li>
							<li><a href="{{ route('tourist-information') }}">Tourist Info</a></li>
							<li><a href="{{ route('corporate') }}">Corporate</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
							<li><a href="{{ route('contact') }}">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>

	@if( $showLogo )

		<div id="topLeftCorner" 
			style="background-image: url({{ asset('images/top-left-corner.png') }});"
			class="wow fadeInLeft" data-wow-delay="0.2s"
		>
		</div>		

		<div class="logo wow fadeInLeft" data-wow-delay="0.6s">
			<a href="{{ route('home') }}">
				{!! getPhoto('logo.png', 'Eclipse Tourism', '') !!}
			</a>
		</div>
	@endif	

</header>

