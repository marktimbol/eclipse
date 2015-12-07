@extends('public.layouts.public')

@section('pageTitle', 'Contact Us')

@section('body_class', 'page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Contact Us</h1>

				<div class="page__description">
					<div class="row">
						<div class="col s12 m6">
							<form method="POST" action="#">
								{!! csrf_field() !!}
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
								</div>

								<div class="form-group">
									<label for="email">eMail</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" />
								</div>

								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" />
								</div>

								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="message" class="form-control" rows="5" placeholder="Ask us questions"></textarea>
								</div>

								<div class="form-group">
									<button type="submit" class="btn waves-effect waves-light">Send Message</button>
								</div>
							</form>	
						</div>

						<div class="col s12 m6">
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

							<h4>Write to Us</h4>

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