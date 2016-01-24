@extends('public.layouts.public')

@section('pageTitle', 'About Us')

@section('body_class', 'page has-parallax')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">About Us</h1>
                            <p>Eclipse Tourism LLC started as a travel management company based in Dubai and UK in 2011. In short span of time, Eclipse Tourism LLC has made its presence felt in the Industry and today we are known as one of the leading inbound tour operators.</p>
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
					<h3>Vision</h3>
					<p>Our Vision is to be one of the most professional, informative, fun, inbound tour operator providing you with a vast range of tourism related events, activities and services and progressive hospitality. We aim to deliver excellent customer service for all our clients experiencing high quality of service at reputable prices. We are committed to listening and responding to comments and suggestions for improvements</p>

					<h3>Mission</h3>
					<p>
					It is our mission to provide you with a memorable experience…
					</p>

					<p>
					Ensuring every travel experience of every individual is completely hassle free by providing a service that is professional, informative and fun and aiming to exceed their expectation.
					</p>

					<p>
					We aim to provide our client the highest standards of service wherein each and every individual availing our tour we have a happy and satisfied customer.
					</p>

					<p>
					So whether it is business or pleasure come join us and explore Dubai leaving your itinerary to us (the experts) and come away with a memorable experience
					</p>

                   	<h3>Company Profile</h3>
                    <p>
					Eclipse Tourism LLC started as a travel management company based in Dubai and UK in 2011. In short span of time, Eclipse Tourism LLC has made its presence felt in the Industry and today we are known as one of the leading inbound tour operators.
					</p>

					<p>
					The founders of the company are based in the U.A.E and the UK. They are dedicated to provide quality customer experience in tourism and are motivated by the belief that great experiences build great companies.
					</p>

					<p>
					The activities of Eclipse Tourism L.L.C, primarily embrace servicing and satisfying the needs of corporate business travelers, leisure travelers and services for travel clients visiting the United Arab Emirates. We at Eclipse Tourism L.L.C are proud of our reputation for excellence, a reputation based on our commitment to always exceed client’s expectation.
					</p>

					<p>
					Eclipse Tourism are managed by a professional Team in U.A.E. and UK.
					</p>

					<p>
					Our staff are committed to serve customers with professional care and give them optimum satisfaction inspiring people to travel and explore. Our company has multilingual tour guides and packages can be tailor-made for customers and corporate companies.
					</p>

					<p>
					Eclipse Tourism LLC is regulated by The Department of Tourism Commerce and Marketing in the UAE.
					</p>
					
				</div>

			</div>
		</div>
	</div>  

@endsection