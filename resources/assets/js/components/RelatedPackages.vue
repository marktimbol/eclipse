
<template>

	<h4 class="package__related__title">Related Packages</h4>

	<package v-for="package in packages | limitBy 3" :package="package"></package>

</template>

<script>

	import Package from './Package.vue';

	export default {

		props: ['packages'],

		components: {

			Package

		}

	}
</script>	