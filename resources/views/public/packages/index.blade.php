@extends('public.layouts.public')

@section('pageTitle', 'Packages')

@section('body_class', 'page has-parallax')

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


	<div class="row">
		<div class="col s12">
			<div class="page__description">
				<div class="row">
					<div class="col s12 m3">
						<div class="card-panel">
							<div class="filter-package">
								
								<categories-filter :categories="categories"></categories-filter>

							</div>
						</div>
					</div>

					<div class="col s12 m9">

						<div class="card-panel">

							<div class="row">

								<package-lists :packages="packages"></package-lists>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>



@endsection

@section('footer_scripts')
	<script src='/js/main.js'></script>
@endsection	
