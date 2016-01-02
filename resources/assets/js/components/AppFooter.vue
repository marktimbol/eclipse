
<template>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col m12">
					<div class="row">
						<div class="col m2 s6">
							<h5 class="footer__title">Useful Links</h5>
							<ul class="footer__links">
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Terms &amp; Conditions</a></li>										
							</ul>
						</div>

						<div class="col m2 s6">
							<h5 class="footer__title">Follow Us</h5>
							<ul class="footer__links">
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Facebook</a></li>									
							</ul>
						</div>	

						<div class="col m3 s6">
							<h5 class="footer__title">Download our App</h5>
							<ul class="footer__links">
								<li><a href="#">iOS</a></li>
								<li><a href="#">Android</a></li>															
							</ul>
						</div>	

						<div class="col m2 offset-m3">
							<a href="http://expo2020dubai.ae/en/" target="_blank">
								<img v-bind="{src: '/images/dubai-expo-2020.png'}" alt="Dubai Expo 2020" class="right" />
							</a>
						</div>																							
					</div>
				</div>		
			</div>
		</div>
	</footer>

	<overlay-menu></overlay-menu>

</template>

<script>

	import OverlayMenu from './OverlayMenu.vue';

	export default {

		components: {

			OverlayMenu

		}
	}

</script>