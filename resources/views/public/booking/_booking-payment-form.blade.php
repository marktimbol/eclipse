
@include('errors.forms')

<form method="POST" action="{{ route('booking.payment', $booking->booking_reference) }}" id="billing-form">

	{!! csrf_field() !!}		

	{!! method_field('PUT') !!}

	<input type="hidden" name="user_id" value="{{ $booking->user->id }}" />
	
	<input type="hidden" name="booking_reference" value="{{ $booking->booking_reference }}" />

	@include('public.partials._contact-information', ['disabledInput' => true])	

	@include('public.partials._billing-form')			

	<div class="alert alert-danger payment-errors"></div>
				
	<div class="place-order-button">
		<button type="submit" name="submitPayment" class="btn btn-large waves-effect waves-light">
			<i class="fa fa-lock"></i> &nbsp; Pay {!! convertedAmountWithCurrency(calculateTotalAmount($packages)) !!}
		</button>
	</div>

	@include('spinner')	

</form>