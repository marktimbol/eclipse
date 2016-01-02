
var Vue = require('vue');

Vue.use( require('vue-resource') );

import MainMenu from './components/MainMenu.vue';
import Slideshow from './components/Slideshow.vue';
import FeaturedPackages from './components/FeaturedPackages.vue';
import CategoriesFilter from './components/CategoriesFilter.vue';
import PackageLists from './components/PackageLists.vue';
import RelatedPackages from './components/RelatedPackages.vue';

import AppFooter from './components/AppFooter.vue';

new Vue({

	el: '#eclipseApp',

	components: { 

        MainMenu,

        Slideshow,

		FeaturedPackages,

		CategoriesFilter,

		PackageLists,

        RelatedPackages,

        AppFooter

	},

	data: {

		categories: [],

		packages: [],

		featuredPackages: [],

		currentPackage: [],

		package_slug: ''

	},

    ready() {

    	// alert('Ready to go!');

    	this.fetchCategories();

    	this.fetchPackages();

    	this.fetchFeaturedPackages();

    	// this.getPackage();

    },

    methods: {

    	fetchCategories() {

			this.$http.get('/api/v1/categories').then(function (response) {

				console.log('fetchCategories()');

				this.$set('categories', response.data)


			});

    	},

    	fetchPackages() {

    		this.$http.get('/api/v1/packages').then(function( response) {

    			console.log('fetchPackages()');

    			this.$set('packages', response.data);

    		});

    	},

    	fetchFeaturedPackages() {

    		this.$http.get('/api/v1/featured-packages').then(function( response) {

    			console.log('fetchFeaturedPackages()');

    			this.$set('featuredPackages', response.data);

    		});

    	},


    	getPackage() {

    		this.$http.get('/api/v1/package/' + this.slug).then(function(response) {

    			console.log('getPackage()');

    			this.$set('currentPackage', response.data);

    		});

    	}

    }

})