<template>

	<div class="col m9 s12">

		<h1 class="package__title">{{ package.name }}</h1>

		<div v-for="photo in package.photos">
			<img 
				v-bind="{ src: uploadsPath + photo.path }"
				alt="{{ package.name }}" 
				title="{{ package.name }}" 
				class="img-responsive img-rounded" 
				/>
		</div>

		<div class="package__description">
			<h3>{{ package.subtitle }}</h3>
			<div v-html="package.description"></div>
		</div>

	</div>


	<div class="col m3 s12">

		<h3 class="package__price">
			{{ package.adult_price | currency currentCurrency }}
		</h3>

		<span class="package__price__notice"><em>Prices are subject to change without prior notice</em></span>

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
				<strong>Adult:</strong> {{ package.adult_price | currency currentCurrency }}
			</li>
			<li class="collection-item">
				<strong>Child:</strong> {{ package.child_price | currency currentCurrency }}
			</li>
			<li class="collection-item" v-if="package.confirm_availability">
				Subject for Availability
			</li>			
		</ul>

		<book-package :package="package"></book-package>

		<div class="share-package">
			<h6>Share this package</h6>
		</div>		

	</div>

</template>

<script>

	import BookPackage from './BookPackage.vue';

	export default {
		props: ['package'],
		data() {
			return {
				uploadsPath: $('meta[name="uploads_path"').attr('content'),
				currentCurrency: $('meta[name="current_currency"]').attr('content')
			}
		},

		components: {
			BookPackage
		}
	}
</script>	
