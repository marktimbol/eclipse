@foreach( $packages->chunk(3) as $chunks )
	<div class="row">
		<?php $count = 1; ?>
		@foreach( $chunks as $package ) 
			<div class="col m4 s12">
				<div class="card">
					<div class="card-image">
						{!! beLazy($package->photos) !!}
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