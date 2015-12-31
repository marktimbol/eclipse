<template>

	<li>

		<h6 class="category__title" @click="visible = ! visible">{{ category.name }}</h6>

		<category-packages
			v-show = "visible"
			:packages = "category.packages"
			>

		</category-packages>

	</li>

</template>

<script>

	import CategoryPackages from './CategoryPackages.vue';

	export default {

		props: ['category'],

		components: {

			CategoryPackages

		},

		data() {

			return {

				visible: false

			}
		}

	};

</script>