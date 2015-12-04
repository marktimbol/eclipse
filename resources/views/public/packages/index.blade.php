@extends('public.layouts.public')

@section('pageTitle', 'Packages')

@section('body_class', 'page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1 class="page__title">Packages</h1>

				<div class="page__description">
					@include('public.partials._packages')
				</div>
			</div>
		</div>
	</div>
@endsection