
<div class="card-panel">
	<div class="row center-content">
		<div class="col s12 m8">
			<h5>Billing Information</h5>
		</div>

		<div class="col s12 m4">
			{!! getPhoto('credit-card-icons.png', 'Secure Payment') !!}
		</div>
	</div>

	<div class="row">
		<div class="col s12 m6">
			<div class="form-group">
				<label for="cc-number">Card Number</label>
				<input type="text" id="cc-number" class="form-control" data-stripe="number" placeholder="Debit/Credit Card Number" required />
			</div>
		</div>

		<div class="col s12 m6">
			<div class="form-group">
				<label for="nameOnCard">Name on Card</label>
				<input type="text" id="nameOnCard" class="form-control" data-stripe="name" placeholder="Name on Card" required />
			</div>
		</div>

		<div class="col s12 m6">
			<div class="row">
				<div class="col s6 m6">
					<div class="form-group">
						<label for="expiryMonth">Expiry Date</label>
			            <select data-stripe="exp-month" id="expiryMonth" class="form-control" required>
			            	<option value="">Month</option>
			            	<option value="1">January</option>
			            	<option value="2">February</option>
			            	<option value="3">March</option>
			            	<option value="4">April</option>
			            	<option value="5">May</option>
			            	<option value="6">June</option>
			            	<option value="7">July</option>
			            	<option value="8">August</option>
			            	<option value="9">September</option>
			            	<option value="10">October</option>
			            	<option value="11">November</option>
			            	<option value="12">December</option>
			            </select>
			        </div>
				</div>

				<div class="col s6 m6">
					<div class="form-group">
						<label>&nbsp;</label>
			            <select data-stripe="exp-year" id="expiryYear" class="form-control" required>
			            	<option value="">Year</option>
			            	@foreach( range(date('Y'), date('Y') + 15) as $year)
			            		<option value="{{ $year }}">{{ $year }}</option>
			            	@endforeach
			            </select>
		            </div>
				</div>	
			</div>
		</div>		

		<div class="col s12 m6">
			<div class="row">
				<div class="col s6 m6">
				    <div class="form-group">
				    	<label for="cvc" class="full-width">Security code</label>
			      		<div class="input-container">
				      		<input id="cvc" type="text" data-stripe="cvc" class="form-control" required />
				      		<i class="fa fa-question-circle"></i>
			      		</div>
				    </div>
				</div>	

{{-- 				<div class="col s6 m6">
				    <div class="form-group">
				    	<label for="zip">Zip/Postal Code</label>
			      		<div class="input-container">
				      		<input id="zip" type="text" data-stripe="address_zip" class="form-control" required />
				      		<i class="fa fa-question-circle"></i>
			      		</div>
				    </div>
				</div> --}}							
			</div>
		</div>
	</div>

</div>