<template>

	<ul>
		<li v-for="package in packages">
			<a href="/package/{{ package.slug }}">
				{{ package.name }}
			</a>
		</li>
	</ul>

</template>

<script>

	export default {

		props: ['packages']

	};

</script>