@extends('public.layouts.public')

@section('pageTitle', $pageTitle)

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/owl-carousel.css') }}" />
@endsection

@section('body_class', 'page')

@inject('time', 'Eclipse\Services\Time')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12 s12">
				<div class="package">
					<h1 class="package__title wow fadeInLeft">{{ $package->name }}</h1>

					<div class="row">
						<div class="col m9 s12 wow fadeInLeft">
						
							<div class="owl-carousel">
								{!! displayAll($package->photos, 'img-rounded') !!}
							</div>

							<div class="package__description">
								<h3>{{ $package->subtitle }}</h3>
								{!! $package->description !!}
							</div>
						</div>

						<div class="col m3 s12 wow fadeInRight">
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

							<div class="book-a-package-form">

								<h3 class="book-a-package-form__title">Book this package</h3>

								@include('errors.forms')
								
								@if( $package->confirm_availability )
									<form method="POST" action="{{ route('booking.store') }}">
								@else
									<form method="POST" action="{{ route('cart.store') }}">
								@endif 
								
									{!! csrf_field() !!}

									<input type="hidden" name="package_id" value="{{ $package->id }}" />

									<div class="row">
										<div class="col m12 mb-0">
											<div class="form-group">
												<label for="date">Preferred Date:</label>
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													<input type="text" name="date" id="date" class="form-control datepicker" required />
												</div>
											</div>
										</div>

										@if( $package->has_time_options )
											<div class="col m12 mb-0">
												<div class="form-group">
													<label for="time">Preferred Time:</label>
													<select name="time" class="form-control" required>
														<option value="" disabled selected>Choose your option</option>
														@foreach($time->get() as $value) 
															<option value="{{ $value }}">{{ $value }}</option>
														@endforeach
													</select>
												</div>
											</div>	
										@endif									

										<div class="col m12 s12">
											<div class="row">
												<div class="col m6 s6 mb-0">
													<div class="form-group">
														<label for="adult">Adult</label>
														<select name="quantity" id="adult" class="form-control">
															@foreach( range(1,20) as $count )
																<option value="{{ $count }}">{{ $count }}</option>
															@endforeach	
														</select>

														<input type="hidden" name="price" value="{{ $package->adult_price }}" />
													</div>
												</div>

												<div class="col m6 s6 mb-0">
													<div class="form-group">
														<label for="child">Child</label>
														<select name="child_quantity" id="child" class="form-control">
															@foreach( range(0,20) as $count )
																<option value="{{ $count }}">{{ $count }}</option>
															@endforeach	
														</select>
														<input type="hidden" name="child_price" value="{{ $package->child_price }}" />
													</div>
												</div>
											</div>
										</div>

										<div class="col m12 s12">
											<div class="form-group">
												<button type="submit" class="btn btn-large waves-effect waves-light full-width">
													Book now
												</button>
											</div>
										</div>
									</div>
								</form>

							</div>

							<div class="share-package">

								<h6>Share this package</h6>

							</div>
						</div>
					</div>	

					<div class="divider"></div>

					<div class="row">
						<div class="col m12 s12">
							<div class="package__related">
								<h4 class="package__related__title">Related Packages</h4>
							
								@include('public.partials._packages')	
							</div>
						
						</div>				
					</div>
				</div><!-- .package -->
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/owl-carousel.js') }}"></script>
@endsection