@foreach( $packages->chunk(3) as $chunks )
	<div class="row">
		<?php $count = 1; ?>
		@foreach( $chunks as $package ) 
			<div class="col m4 s12 wow fadeInLeft" data-wow-delay="0.{{$count}}s">
				<div class="card">
					<div class="card-image">
						{!! display($package->photos, 'activator') !!}
					</div>

					<div class="card-action">
						<a href="{{ route('package', $package->slug) }}">{{ $package->name }}</a>
					</div>
				</div>
			</div>
			<?php $count+=2; ?>
		@endforeach	
	</div>
@endforeach	