@extends('public.layouts.public')

@section('pageTitle', 'Packages')

@section('body_class', 'page has-parallax')

@inject('categories', 'Eclipse\Repositories\Category\CategoryRepositoryInterface')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/accordion-menu.css') }}" />
@endsection	

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">Packages</h1>
						    <p>
						        Please put a description of this page here. We will change also the picture.
						    </p>
                        </div>
                    </div>
                </div>
            </div>
            {!! getPhoto('packages.jpg', 'Packages') !!}
        </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="page__description">
					<div class="row">
						<div class="col s12 m3">
							<div class="card-panel">
								<div class="filter-package">
									<h5 class="filter-package__title">Filters</h5>

									<ul class="accordion-menu">
										@foreach( $categories->all() as $category)
											<li>
												<a href="#" class="filter-package__category">
													{{ $category->name }}
												</a>

												@if( count( $category->packages ) )

													<ul>

														@foreach( $category->packages as $package )

															<li>
																<a href="{{ route('package', $package->slug) }}">
																	{{ $package->name }}
																</a>
															</li>

														@endforeach

													</ul>

												@endif

												<ul>

												</ul>	
											</li>
										@endforeach	
									</ul>
								</div>
							</div>
						</div>

						<div class="col s12 m9">
							<div class="card-panel">
								@include('public.partials._packages')
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/accordion-menu.js') }}"></script>
@endsection	