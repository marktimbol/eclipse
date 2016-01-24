<template>

	<div class="slideshow">
		
		<div id="topLeftCorner"></div>

		<div class="logo">
			<a href="/">
				<img v-bind="{ src: logoPath }" alt="Eclipse Tourism" title="Eclipse Tourism" class="img-responsive" />
			</a>
		</div>

		<div id="bottomRightCorner"></div>	

		<video id="top_video" autoplay loop preload muted poster="">
			<source v-bind="{ src: videoMp4Path }" type="video/mp4">
			<source v-bind="{ src: videoWebmPath }" type="video/webm">
		</video>
		
		<div id="intro-title">
			<div>
				<img 
					v-bind="{src: memorableExperiencePath}" 
					alt="A Memorable Experience" title="A Memorable Experience"
					class="img-responsive"
					/>
			</div>

			<p>
				<a href="/packages" class="btn waves-effect waves-light">View our Packages</a>
			</p>
		</div>
	
	</div>

	<p>&nbsp;</p>

</template>

<script>

	export default {

		data() {

			return {

				imagesPath: $('meta[name="images_path"]').attr('content'),

				videosPath: $('meta[name="videos_path"]').attr('content')
			}
		},

		computed: {

			logoPath() {

				return this.imagesPath + 'logo.png';
			},

			memorableExperiencePath() {

				return this.imagesPath + 'memorable-experience.png'

			},

			videoMp4Path() {

				return this.videosPath + 'video.mp4';

			},

			videoWebmPath() {

				return this.videosPath + 'video.webm';

			}
			
		}
	}

</script>