@extends('public.layouts.public')

@section('pageTitle', 'Contact Us')

@section('body_class', 'page has-parallax')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">Contact Us</h1>
						    <p>
						        Please put a description of this page here. We will change also the picture.
						    </p>
                        </div>
                    </div>
                </div>
            </div>
            {!! getPhoto('contact-us.jpg', 'Contact Us') !!}
        </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="page__description">
					<div class="row">
						<div class="col s12 m6">
							<h3>Send us a message</h3>
							@include('errors.forms')

							<form method="POST" action="{{ route('contact.submit') }}">
								{!! csrf_field() !!}
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" />
								</div>

								<div class="form-group">
									<label for="email">eMail</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" />
								</div>

								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" value="{{ old('phone') }}" />
								</div>

								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="message" class="form-control" rows="5" placeholder="Ask us questions">{{ old('message') }}</textarea>
								</div>

								<div class="form-group">
									<button type="submit" class="btn waves-effect waves-light">Send Message</button>
								</div>
							</form>	
						</div>

						<div class="col s12 m6">
							<h3>Telephone Us</h3>
							<p>
								Please feel free to telephone us on our office phone number.
							</p>
							<p>
								Our office is staffed between 9am and 9pm (local time) Saturday - Thursday.
							</p>

							<ul class="address has-icon">
								<li><i class="fa fa-phone"></i> +971 4 4534375</li>
								<li><i class="fa fa-fax"></i> +971 4 4534376<br /><br /></li>
								<li><p>For 24 hour assistance please use the mobile telephone numbers listed below.</p></li>
								<li><i class="fa fa-mobile"></i> +971 50 2888724</li>
								<li><i class="fa fa-mobile"></i> +971 50 2949626</li>
							</ul>

							<h3>Write to Us</h3>

							<p>
								Please use our address below for all postal correspondance.
							</p>

							<ul class="address has-icon">
								<li><i class="fa fa-map-marker"></i> P.O. Box 125582 S-8, Building C-8 China Cluster, International City, Dubai, United Arab Emirates</li>
							</ul>				
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>  

@endsection