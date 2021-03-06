<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('pageTitle') | {{ companyName() }}</title>
	<meta id="token" name="token" value="{{ csrf_token() }}" />
	<meta name="publishable-key" content="{{ env('STRIPE_KEY') }}" />
	<meta name="twocheckout-account-number" content="{{ env('TWOCHECKOUT_ACCOUNT_NUMBER') }}" />
	<meta name="twocheckout-public-key" content="{{ env('TWOCHECKOUT_PUBLIC_KEY') }}" />
	<meta name="uploads_path" content="{{ env('UPLOADS_PATH') }}" />
	<meta name="images_path" content="{{ env('IMAGES_PATH') }}" />
	<meta name="videos_path" content="{{ env('VIDEOS_PATH') }}" />
	<meta name="current_currency" content="{{ currentCurrency() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ elixir('css/public.css') }}" />

	@yield('header_styles')
	
</head>

<body class="@yield('body_class')" id="eclipseApp">

	@include('public.layouts.partials._header', ['showLogo' => false])

	@yield('content')

	@include('public.partials._floating-cart')

	<app-footer></app-footer>

	<script src="{{ elixir('js/public.js') }}"></script>
	<script src="{{ '/js/main.js' }}"></script>

	@yield('footer_scripts')

	@include('flash')
	
</body>
</html>
