
var Vue = require('vue');

Vue.use( require('vue-resource') );

import CategoriesFilter from './components/CategoriesFilter.vue';
import PackageLists from './components/PackageLists.vue';

new Vue({

	el: '#eclipseApp',

	components: { 

		CategoriesFilter,

		PackageLists

	},

	data: {

		categories: [],

		packages: []

	},

    ready: function() {

    	// alert('Ready to go!');

    	this.fetchCategories();

    	this.fetchPackages();

    },

    methods: {

    	fetchCategories: function() {

			this.$http.get('/api/v1/categories').then(function (response) {

				console.log('fetchCategories()');

				this.$set('categories', response.data)


			}, function (response) {

				//handle error here

			});

    	},

    	fetchPackages: function() {

    		this.$http.get('/api/v1/packages').then(function( response) {

    			console.log('fetchPackages()');

    			this.$set('packages', response.data);

    		}, function( response ) {


    		});

    	}

    }

})