

<template>

	<div class="col m4 s12">
		<div class="card">
			<div class="card-image">
				<img src="{{ imagePath }}" alt="" 
				/>
			</div>

			<div class="card-action">
				<a href="/package/{{ package.slug }}">{{ package.name }}</a>
			</div>
		</div>
	</div>


</template>


<script>

	export default {

		props: ['package'],

		data() {

			return {

				uploadsPath: $('meta[name="uploads_path"]').attr('content')

			}

		},

		computed: {

			imagePath() {

				return this.uploadsPath + this.package.photos[0].path;

			}

		}

	}

</script>	