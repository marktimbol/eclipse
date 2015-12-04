
@include('errors.forms')

<form method="POST" action="{{ route('booking.checkout') }}">

	{!! csrf_field() !!}		

	@include('public.partials._contact-information', ['disabledInput' => false])	

	<p>&nbsp;</p>
				
	<button type="submit" name="submit" class="btn btn-large waves-effect waves-light">
		Book Now
	</button>

</form>