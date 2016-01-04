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

					<div class="row">

						<package-info :package="currentPackage"></package-info>

					</div>

					<div class="divider"></div>

					<div class="row">
						<div class="col m12 s12">
							<div class="package__related">

								<related-packages :packages="packages"></related-packages>

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