<template>

	<h5 class="filter-package__title">Categories</h5>

	<ul>

		<category 
			v-for="category in categories" 
			:category = "category"
			>

		</category>

	</ul>

</template>

<script>

	import Category from './Category.vue';

	export default {

		props: ['categories'],

		components: {

			Category

		}

	};

</script>