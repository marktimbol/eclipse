Vue.component('categories-filter', {

	template: '#categories-filter-template',

	props: ['categories']

});

Vue.component('category', {

	template: '#category-template',

	props: ['name'],

	data: function() {

		return {

			visible: false

		}

	}

});

Vue.component('category-packages', {

	template: '#category-packages-template',

	props: ['packages']

});


Vue.component('packages', {

	template: '#packages-template',

	props: ['packages'],

	data: function() {

		return {

			filterPackages: ''
		}

	}

});


Vue.component('package', {

	template: '#package-template',

	props: ['package']

});


new Vue({

	el: '#eclipseApp',

	data: {

		categories: [],

		packages: []

	},

    ready: function() {

    	this.fetchCategories();

    	this.fetchPackages();

    },

    methods: {

    	fetchCategories: function() {

			this.$http.get('/api/v1/categories').then(function (response) {

				this.$set('categories', response.data)

			}, function (response) {

				//handle error here

			});

    	},

    	fetchPackages: function() {

    		this.$http.get('/api/v1/packages').then(function( response) {

    			this.$set('packages', response.data);

    		}, function( response ) {


    		});

    	}

    }
})
//# sourceMappingURL=vue-package.js.map
