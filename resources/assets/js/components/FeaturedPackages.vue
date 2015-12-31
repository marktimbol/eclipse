<template>

	<div class="col s12 m12">
		<h3 class="featured__package__title">Featured Packages</h3>
	</div>

	<div class="pattern pattern--hidden"></div>

	<featured-package
		v-for="package in packages" 
		:package = "package"
		>
	</featured-package>

</template>

<script>

	import FeaturedPackage from './FeaturedPackage.vue';

	export default {

		props: ['packages'],

		components: {

			FeaturedPackage

		}

	};

</script>