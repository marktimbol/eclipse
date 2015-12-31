

<template>

	<package v-for="package in packages" :package="package"></package>

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