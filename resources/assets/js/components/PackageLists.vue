

<template>

	<div class="col m4 right">
		<input type="text" class="form-control" v-model="filterPackage" placeholder="Search package" />
	</div>

	<div class="clearfix"></div>

	<hr />

	<package v-for="package in packages | filterBy filterPackage" :package="package"></package>

</template>


<script>

	import Package from './Package.vue';

	export default {

		props: ['packages'],

		data() {

			return {

				filterPackage: ''
			}

		},

		components: {

			Package

		}

	}

</script>	