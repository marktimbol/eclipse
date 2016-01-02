
<template>

	<div class="mega-menu">

		<div 
			class="column"
			v-for="category in categories | limitBy 8" 
		>
			<h6>{{ category.name }}</h6>

			<ol>
				<li v-for="package in category.packages">
					<a href="/package/{{ package.slug }}">
						{{ package.name }}
					</a>
				</li>
			</ol>
		</div>

	</div>

</template>

<script>

	export default {

		props: ['categories']

	}

</script>