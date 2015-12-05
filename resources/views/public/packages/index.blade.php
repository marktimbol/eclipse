@extends('public.layouts.public')

@section('pageTitle', 'Packages')

@section('body_class', 'page')

@inject('categories', 'Eclipse\Repositories\Category\CategoryRepositoryInterface')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1 class="page__title">Packages</h1>

				<div class="page__description">
					<div class="row">
						<div class="col s12 m3">
							<div class="card-panel">
								<div class="filter-package">
									<h5 class="filter-package__title">Filter</h5>

									@foreach( $categories->all() as $category )
										<h6 class="filter-package__category">
											<a href="{{ route('category', $category->slug) }}">
												{{ $category->name }}
											</a>
										</h6>

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
									@endforeach
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