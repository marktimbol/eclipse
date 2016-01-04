var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');


/*
 |--------------------------------------------------------------------------
 | PUBLIC ASSETS
 |--------------------------------------------------------------------------
 */

var bowers = '../bower_components/';

elixir(function(mix) {
	mix.sass('app.scss', 'resources/assets/css/app.css')
    	.styles([
          'libs/bootstrap.custom.css',
          bowers + 'sweetalert/dist/sweetalert.css',
          bowers + 'fontawesome/css/font-awesome.css',
          bowers + 'materialize/dist/css/materialize.css',
          'app.css'
    	], 'public/css/public.css')

      .scripts([
          bowers + 'jquery/dist/jquery.js',
          'libs/modernizr.custom.js',
          'libs/classie.js',
          bowers + 'sweetalert/dist/sweetalert.min.js',
          bowers + 'materialize/dist/js/materialize.js',
          bowers + 'bLazy/blazy.js',
          'libs/mobile-menu.js',
          'materialize.js',
          'app.js'
      ], 'public/js/public.js')

      .styles([
        'libs/accordion-menu.css'
        ], 'public/css/accordion-menu.css')

      .scripts([
        'libs/multilevel-accordion.js',
        'libs/accordion-menu.js'
        ], 'public/js/accordion-menu.js')

      .scripts([
        'libs/stripe-billing.js'
        ], 'public/js/stripe-billing.js')

      .scripts([
        'libs/twocheckout-billing.js'
        ], 'public/js/twocheckout-billing.js')

      .styles([
        bowers + 'owl-carousel/owl-carousel/owl.carousel.css',
        bowers + 'owl-carousel/owl-carousel/owl.theme.css'
        ], 'public/css/owl-carousel.css')

      .scripts([
        'libs/home-video.js'
        ], 'public/js/home-video.js')      

      .scripts([
        bowers + 'owl-carousel/owl-carousel/owl.carousel.js',
        'libs/owl-carousel.js'
        ], 'public/js/owl-carousel.js')

      .styles([
        'libs/triangle/card.css',
        'libs/triangle/pattern.css'
        ], 'public/css/triangle.css')

      .scripts([  
          'libs/triangle/trianglify.min.js',
          'libs/triangle/TweenMax.min.js',
          'libs/triangle/ScrollToPlugin.min.js',
          'libs/triangle/cash.min.js',
          'libs/triangle/Card-circle.js',
          'libs/triangle/triangle.js'
        ], 'public/js/triangle.js');
  
  mix.browserify('main.js')

/*
 |--------------------------------------------------------------------------
 | ADMIN ASSETS
 |--------------------------------------------------------------------------
 */

 mix.sass('admin.scss', 'resources/assets/css/admin/admin.css')
    
    .styles([
      'admin/admin.css',
      'admin/sb-admin.css',
      bowers + 'fontawesome/css/font-awesome.css',
      bowers + 'sweetalert/dist/sweetalert.css',
      bowers + 'metisMenu/dist/metisMenu.css'
      ], 'public/css/admin.css')

    .scripts([
      'libs/modernizr.custom.js',
      bowers + 'jquery/dist/jquery.js',
      bowers + 'bootstrap/dist/js/bootstrap.js',
      bowers + 'sweetalert/dist/sweetalert.min.js',
      bowers + 'metisMenu/dist/metisMenu.js',
      'admin/admin.js',
      'admin/sb-admin.js'
      ], 'public/js/admin.js')

    .styles([
      bowers + 'dropzone/dist/dropzone.css'
      ], 'public/css/dropzone.css')

    .scripts([
      bowers + 'dropzone/dist/dropzone.js',
      'admin/dropzone.js'
      ], 'public/js/dropzone.js')

    .styles([
      bowers + 'fullcalendar/dist/fullcalendar.css'
      ], 'public/css/calendar.css')

    .scripts([
      bowers + 'moment/min/moment.min.js',
      bowers + 'fullcalendar/dist/fullcalendar.js',
      'admin/calendar.js'
      ], 'public/js/calendar.js')

    .version([
      'css/public.css',
      'js/public.js',

      'css/accordion-menu.css',
      'js/accordion-menu.js',

      'js/stripe-billing.js',
      'js/twocheckout-billing.js',

      'js/home-video.js',

      'css/triangle.css',
      'js/triangle.js',
      
      'css/owl-carousel.css',
      'js/owl-carousel.js',

      'css/admin.css',
      'js/admin.js',

      'css/dropzone.css',
      'js/dropzone.js',

      'css/calendar.css',
      'js/calendar.js'
      ]);
});
