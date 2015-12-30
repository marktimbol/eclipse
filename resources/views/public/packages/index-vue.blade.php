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

	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="page__description">
					<div class="row">
						<div class="col s12 m3">
							<div class="card-panel">
								<div class="filter-package">
									
									<categories-filter :categories="categories">

									</categories-filter>

								</div>
							</div>
						</div>

						<div class="col s12 m9">

							<div class="card-panel">

								<div class="row">

									<package v-for="package in packages" :package = "package"></package>
								
								</div>
	
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<template id="categories-filter-template">
		
		<h5 class="filter-package__title">Filters</h5>

		<ul>

			<category 
				v-for="category in categories" 
				:name = "category.name"
				>	

				<category-packages :packages = "category.packages"></category-packages>

			</category>

		</ul>

	</template>


	<template id="category-template">

		<li>

			<h6 class="category__title" @click="visible = ! visible">@{{ name }}</h6>

			<div v-show="visible">

				<slot></slot>

			</div>	
			
			
		</li>

	</template>


	<template id="category-packages-template">
			
		<ul>
			<li v-for="package in packages">
				<a href="/package/@{{ package.slug }}">
					@{{ package.name }}
				</a>
			</li>
		</ul>

	</template>
	

	<template id='package-template'>

		<div class="col m4 s12">
			<div class="card">
				<div class="card-image">
					<img class="b-lazy responsive-img" 
						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
					 	data-src="{{ asset('/images/uploads/') }}package.photos[0].path"		
						alt="" 
					/>
				</div>

				<div class="card-action">
					<a href="/package/@{{ package.slug }}">@{{ package.name }}</a>
				</div>
			</div>
		</div>


	</template>


@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/vue.js') }}"></script>
	<script src="{{ elixir('js/vue-package.js') }}"></script>
@endsection	
