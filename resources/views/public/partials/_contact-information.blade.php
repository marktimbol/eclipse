
<div class="card-panel">

	<h5>Contact Information</h5>

	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" class="form-control" value="{{ $booking->user->name or old('name') }}" placeholder="Full Name" required {{ $disabledInput ? 'disabled' : ''}} />
	</div>

	<div class="row no-margin-bottom">
		<div class="col s12 m6">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="{{ $booking->user->email or old('email') }}" placeholder="Email Address" required {{ $disabledInput ? 'disabled' : ''}}  />
			</div>	
		</div>

		<div class="col s12 m6">
			<div class="form-group">
				<label for="phone">Contact Number</label>
				<input type="text" name="phone" id="phone" class="form-control" value="{{ $booking->user->phone or old('phone') }}" placeholder="Contact Number" required {{ $disabledInput ? 'disabled' : ''}}  />
			</div>
		</div>
	</div>

	<div class="row no-margin-bottom">
		<div class="col s12 m6">
			<div class="form-group">
				<label for="address1">Address Line 1</label>
				<input type="text" name="address1" id="address1" class="form-control" value="{{ $booking->user->address1 or old('address1') }}" placeholder="Address Line 1" required {{ $disabledInput ? 'disabled' : ''}}  />
			</div>	
		</div>

		<div class="col s12 m6">
			<div class="form-group">
				<label for="address2">Address Line 2</label>
				<input type="text" name="address2" id="address2" class="form-control" value="{{ $booking->user->address2 or old('address2') }}" placeholder="Address Line 2" required {{ $disabledInput ? 'disabled' : ''}}  />
			</div>
		</div>
	</div>	

	<div class="row no-margin-bottom">
		<div class="col s12 m6">
			<div class="row">
				<div class="col s12 m6">
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" name="city" id="city" class="form-control" value="{{ $booking->user->city or old('city') }}" placeholder="Your city" required {{ $disabledInput ? 'disabled' : ''}} />
					</div>	
				</div>

				<div class="col s12 m6">
					<div class="form-group">
						<label for="state">State</label>
						<input type="text" name="state" id="state" class="form-control" value="{{ $booking->user->state or old('state') }}" placeholder="State/Province/Region" required {{ $disabledInput ? 'disabled' : ''}} />
					</div>	
				</div>				
			</div>
		</div>

		<div class="col s12 m6">
			<div class="form-group">
				<label for="country">Country</label>
				<input type="text" name="country" id="country" class="form-control" value="{{ $booking->user->country or old('country') }}" placeholder="Your Country" required {{ $disabledInput ? 'disabled' : ''}} />
			</div>	
		</div>
	</div>

</div>