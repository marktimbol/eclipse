<div class="currency card-panel">

	<h5>Select Currency</h5>

	<form method="POST" action="{{ route('change-currency') }}" class="form-inline">
		{!! csrf_field() !!}

		<div class="form-group">
			<div class="bfh-selectbox bfh-currencies" data-currency="{{ currentCurrency() }}" data-flags="true">
				<input type="hidden" name="currency" class="form-control" value="">
				<a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
					<span class="bfh-selectbox-option input-medium" data-option=""></span>
					<b class="caret"></b>
				</a>
				<div class="bfh-selectbox-options">
					<input type="text" class="bfh-selectbox-filter form-control">
					<div role="listbox">
						<ul role="option">
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-sm waves-effect waves-light">Change</button>
		</div>
	</form>

</div>