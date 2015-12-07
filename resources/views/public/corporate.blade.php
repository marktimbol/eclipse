@extends('public.layouts.public')

@section('pageTitle', 'Corporate')

@section('body_class', 'page has-parallax')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">Corporate</h1>
						    <p>
						        Eclipse Tourism can create bespoke team building & corporate events whether it is a few hours or a couple of days. We can cater for groups between 7 to 450 participants at a time.
						    </p>
						    <p>
						        If you can imagine it... We will deliver it...
						    </p>
                        </div>
                    </div>
                </div>
            </div>
            {!! getPhoto('dubai.jpg', 'Dubai') !!}
        </div>
    </div>

@endsection