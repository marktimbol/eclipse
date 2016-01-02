@extends('public.layouts.home')

@section('pageTitle', 'Home')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/triangle.css') }}" />
@endsection

@section('body_class', 'home')

@section('content')

	{{-- @include('public.partials._home-slideshow') --}}
	<slideshow></slideshow>
	
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

				<featured-packages :packages = "featuredPackages">

				</featured-packages>

			</div>

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