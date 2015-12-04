{{-- <section class="cd-hero">
	<ul class="cd-hero-slider ">

		<li class="cd-bg-video selected">
			<div class="cd-full-width">
				<h2>A Memorable Experience</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="{{ route('packages') }}" class="btn waves-effect waves-light">View our Packages</a>
			</div>

			<div class="cd-bg-video-wrapper" data-video="{{ asset('videos/video') }}">
				<!-- video element will be loaded using jQuery -->
			</div>
		</li>
	</ul>
</section> --}}

<div class="slideshow">
	
	<div id="topLeftCorner" 
		style="background-image: url({{ asset('images/top-left-corner.png') }});"
		class="wow fadeInLeft" data-wow-delay="0.2s"
	>
	</div>

	<div class="logo wow fadeInLeft" data-wow-delay="0.6s">
		<a href="{{ route('home') }}">
			{!! getPhoto('logo.png', 'Eclipse Tourism', '') !!}
		</a>
	</div>

	<div id="bottomRightCorner" 
		style="background-image:url({{ asset('images/bottom-right-corner.png') }});"
		class="wow fadeInRight" data-wow-delay="0.6s"
	>
	</div>	

	<video id="top_video" autoplay loop preload muted poster="">
		<source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
		<source src="{{ asset('videos/video') }}" type="video/ogv">
		<source src="{{ asset('videos/video.webm') }}" type="video/webm">
	</video>

	<div id="intro-title">
		<div class="wow fadeInUp" data-wow-delay="0.4s">
			{!! getPhoto('memorable-experience.png', 'A Memorable Experience', '') !!}
		</div>

		<p class="wow fadeInUp" data-wow-delay="0.6s">
			<a href="{{ route('packages') }}" class="btn waves-effect waves-light">View our Packages</a>
		</p>
	</div>

</div>

<p>&nbsp;</p>