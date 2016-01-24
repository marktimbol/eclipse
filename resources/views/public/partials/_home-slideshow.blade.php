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
	>
	</div>

	<div class="logo">
		<a href="{{ route('home') }}">
			{!! getPhoto('logo.png', 'Eclipse Tourism', '') !!}
		</a>
	</div>

	<div id="bottomRightCorner" 
		style="background-image:url({{ asset('images/bottom-right-corner.png') }});"
	>
	</div>	

	<div class="video_container">
		<video id="top_video" autoplay loop preload muted poster="">
			<source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
			<source src="{{ asset('videos/video') }}" type="video/ogv">
			<source src="{{ asset('videos/video.webm') }}" type="video/webm">
		</video>

		<div id="intro-title">
			<div>
				{!! getPhoto('memorable-experience.png', 'A Memorable Experience', '') !!}
			</div>

			<p>
				<a href="{{ route('packages') }}" class="btn waves-effect waves-light">View our Packages</a>
			</p>
		</div>
	</div>

</div>

<p>&nbsp;</p>