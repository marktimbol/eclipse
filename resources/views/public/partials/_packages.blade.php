@foreach( $packages->chunk(3) as $chunks )
	<div class="row">
		<?php $count = 1; ?>
		@foreach( $chunks as $package ) 
			<div class="col m4 s12 wow fadeInLeft" data-wow-delay="0.{{$count}}s">

				<div class="card">
					
					<div class="card-image waves-effect waves-block waves-light">
						{!! display($package->photos, 'activator') !!}
					</div>

					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">{{ $package->name }}</span>
						<p><a href="{{ route('package', $package->slug) }}">View Package</a></p>
					</div>

					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							{{ $package->subtitle }}
							<i class="material-icons right">close</i>
						</span>
						{!! str_limit($package->description, 150) !!}
					</div>	
				</div>
			</div>
			<?php $count+=2; ?>
		@endforeach	


	</div>
@endforeach	