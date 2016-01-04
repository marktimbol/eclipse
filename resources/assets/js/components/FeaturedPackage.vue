<template>

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
						<clipPath id="clipPath{{ package.id }}">
							<circle class="clip" cx="960" cy="250" r="992"></circle>
						</clipPath>
					</defs>
					<image clip-path="url(#clipPath{{ package.id }})" 
							width="1920" 
							height="650" 
							xlink:href="{{ imagePath }}"
					></image>
				</svg>
				<div class="card__content">

					<i class="card__btn-close fa fa-times"></i>
				
					<div class="card__caption">
						<h2 class="card__title">{{ package.name }}</h2>
						<p class="card__subtitle">{{ package.subtitle }}</p>
					</div>

					<div class="card__copy">
						<div class="col m12 s12">
							<div class="package">
								<div class="row">
									<div class="col m9 s12">
										{{{ package.description }}}
									</div>

									<div class="col m3 s12">
										<h3 class="package__price">
											{{ package.adult_price | currency currentCurrency }}
										</h3>

										<ul class="collection">
											<li class="collection-item">
												<strong>Departs:</strong> {{ package.departs }}
											</li>
											<li class="collection-item">
												<strong>Returns:</strong> {{ package.returns }}
											</li>								
											<li class="collection-item">
												<strong>Duration:</strong> {{ package.duration }}
											</li>
											<li class="collection-item">
												<strong>Adult:</strong> {{ package.adult_price }}
											</li>
											<li class="collection-item">
												<strong>Child:</strong> {{ package.child_price }}
											</li>

											<li class="collection-item" v-if="package.confirm_availability">
												Subject for Availability
											</li>								
										</ul>

										<a href="/package/{{ package.slug }}" class="btn btn-large btn-block waves-effect waves-light blue">View Package</a>

										<div class="share-package">
											
											<h6>Share this package</h6>

										</div>

									</div>
								</div>	
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>

</template>

<script>


	export default {

		props: ['package'],

		ready() {

			

		},

		data() {

			return {

				uploadsPath: $('meta[name="uploads_path"]').attr('content'),

				currentCurrency: $('meta[name="current_currency"]').attr('content')

			}

		},

		computed: {


			imagePath() {

				return this.uploadsPath + this.package.photos[0].path;

			}

		}

	};

</script>