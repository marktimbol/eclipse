@extends('public.layouts.home')

@section('pageTitle', 'Home')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/triangle.css') }}" />
@endsection

@section('body_class', 'home')

@section('content')

	@include('public.partials._home-slideshow')
	
	<div class="container">
		<div class="row">
			<div class="col s12 m12">
				<div class="white-background">
					<div class="row center-content">
						<div class="col s12 m8">
							{!! getPhoto('home-slide1.jpg', '', '') !!}
						</div>

						<div class="col s12 m4">
							<div class="home__message">
								<h3 class="home__message__title">Lorem ipsum dolor sit amet.</h3>

								<p class="home__message__description">
									Ipsum has been the industry's standard dummy text ever since the 1500s.
								</p>

								<a href="{{ route('packages') }}" class="btn waves-effect waves-light blue">See the latest offers</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row featured_package">
			<div class="col s12 m12">
				<h3 class="featured__package__title">Featured Packages</h3>
			</div>

			<!-- trianglify pattern container -->
			<div class="pattern pattern--hidden"></div>
			
			@foreach( $packages as $package )
			
				<?php
					$photoPath = $package->photos[0]->path;
				?>
			
				<div class="col s12 m4">
					<div class="card">
						<div class="card__container card__container--closed">
							<svg class="card__image" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								viewBox="0 0 1920 500" 
								preserveAspectRatio="xMidYMid slice"
							>
								<defs>
									<clipPath id="clipPath{{ $package->id }}">
										<circle class="clip" cx="960" cy="250" r="992"></circle>
									</clipPath>
								</defs>
								<image clip-path="url(#clipPath{{ $package->id }})" 
										width="1920" 
										height="650" 
										xlink:href="{{ packagePhoto($photoPath) }}"
								></image>
							</svg>
							<div class="card__content">

								<i class="card__btn-close fa fa-times"></i>
							
								<div class="card__caption">
									<h2 class="card__title">{{ $package->name }}</h2>
									<p class="card__subtitle">{{ $package->subtitle }}</p>
								</div>

								<div class="card__copy">
									<div class="col m12 s12">
										<div class="package">
											<div class="row">
												<div class="col m9 s12">
													{!! $package->description !!}
												</div>

												<div class="col m3 s12">
													<h3 class="package__price">
														{!! convertedAmountWithCurrency($package->adult_price) !!}
													</h3>

													<ul class="collection">
														<li class="collection-item">
															<strong>Departs:</strong> {{ $package->departs }}
														</li>
														<li class="collection-item">
															<strong>Returns:</strong> {{ $package->returns }}
														</li>								
														<li class="collection-item">
															<strong>Duration:</strong> {{ $package->duration }}
														</li>
														<li class="collection-item">
															<strong>Adult:</strong> {!! convertedAmountWithCurrency($package->adult_price) !!}
														</li>
														<li class="collection-item">
															<strong>Child:</strong> {!! convertedAmountWithCurrency($package->child_price) !!}
														</li>

														@if( $package->confirm_availability )
															<li class="collection-item">
																Subject for Availability
															</li>								
														@endif	
													</ul>

													<a href="{{ route('package', $package->slug) }}" class="btn btn-large btn-block waves-effect waves-light blue">View Package</a>

													<div class="share-package">
														
														<h6>Share this package</h6>

													</div>

												</div>
											</div>	
										</div><!-- .package -->
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			
			@endforeach

			<div class="text-center">
				<p>&nbsp;</p>
				<p>
					<a href="{{ route('packages') }}" class="btn waves-effect waves-light">View all Packages</a>
				</p>
			</div>
		</div>	
	</div>

@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/triangle.js') }}"></script>
	<script src="{{ elixir('js/home-video.js') }}"></script>
@endsection