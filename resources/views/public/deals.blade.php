@extends('public.layouts.public')

@section('pageTitle', 'Deals')

@section('body_class', 'page has-parallax')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">Deals</h1>
                           	<p>Coming soon.</p>
                        </div>
                    </div>
                </div>
            </div>
            {!! getPhoto('dubai.jpg', 'Dubai') !!}
        </div>
    </div>


	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="page__description">
					<p>Coming soon.</p>
				</div>

			</div>
		</div>
	</div>  

@endsection