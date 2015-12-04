
@include('errors.forms')

<form method="POST" action="{{ route('cart.checkout') }}" id="billing-form">

	{!! csrf_field() !!}		

	@include('public.partials._contact-information', ['disabledInput' => false])				

	@include('public.partials._billing-form')	

	<div class="alert alert-danger payment-errors"></div>

	<div class="place-order-button">
		<button type="submit" name="submitPayment" class="btn btn-large waves-effect waves-light">
			<i class="fa fa-lock"></i> &nbsp; Pay {!! convertedAmountWithCurrency($cart->total()) !!}
		</button>
	</div>

	@include('spinner')	

</form>