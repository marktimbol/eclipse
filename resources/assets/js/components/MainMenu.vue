
<template>

	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<div class="menu top-menu right hide-on-small-and-down">
					<ul class="menu">
						<li><a href="/">Home</a></li>
						<li><a href="/packages">Packages</a>
							<mega-menu :categories="categories"></mega-menu>
						</li>							
						<li><a href="/deals">Deals</a></li>
						<li><a href="/tourist-information">Tourist Info</a></li>
						<li><a href="/corporate">Corporate</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

</template>

<script>

	import MegaMenu from './MegaMenu.vue';

	export default {

		props: ['categories'],

		components: {

			MegaMenu

		},

		ready() {

		}
	};

</script>