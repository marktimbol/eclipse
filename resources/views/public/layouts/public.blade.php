<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('pageTitle') | Eclipse Tourism</title>
	<meta id="token" name="token" value="{{ csrf_token() }}" />
	<meta name="publishable-key" content="{{ env('STRIPE_KEY') }}" />
	<meta name="twocheckout-account-number" content="{{ env('TWOCHECKOUT_ACCOUNT_NUMBER') }}" />
	<meta name="twocheckout-public-key" content="{{ env('TWOCHECKOUT_PUBLIC_KEY') }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ elixir('css/public.css') }}" />

	@yield('header_styles')
	
</head>
<body class="@yield('body_class')">

	@include('public.layouts.partials._header', ['showLogo' => true])

	@yield('content')

	@include('public.partials._floating-cart')

	@include('public.layouts.partials._footer')

	<script src="{{ elixir('js/public.js') }}"></script>

	@yield('footer_scripts')

	@include('flash')
</body>
</html>
