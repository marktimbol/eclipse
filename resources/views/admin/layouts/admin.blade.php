<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('pageTitle') - Dashboard</title>
	<meta id="token" name="token" value="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ elixir('css/admin.css') }}" />	
	@yield('header_styles')
	
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}" target="_blank">Eclipse Tourism</a>
            </div>

            @include('admin.layouts.partials._topnav')

            @include('admin.layouts.partials._sidenav')
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>

    <script src="{{ elixir('js/admin.js') }}"></script>
	
	@yield('footer_scripts')

	@include('flash')
</body>
</html>
