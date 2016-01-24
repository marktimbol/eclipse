
<template>

	<div class="book-a-package-form">

		<h3 class="book-a-package-form__title">Book this package</h3>

			<form method="POST" @submit.prevent="bookCurrentPackage">

			<input type="hidden" name="_token" value="{{ token }}" />

			<div class="row">
				<div class="col m12 mb-0">
					<div class="form-group">
						<label for="date">Preferred Date:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input type="text" 
								v-model="bookAnewPackage.date" 
								class="form-control datepicker"
								/>
						</div>
					</div>
				</div>

				<div class="col m12 mb-0" v-if="package.has_time_options">
					<div class="form-group">
						<label for="time">Preferred Time:</label>
						<select v-model="bookAnewPackage.time" class="form-control">
							<option value="" disabled selected>Choose your option</option>
							<option 
								v-for="time in timings" 
								value="{{ time }}"
								>
								{{ time }}
							</option>
						</select>
					</div>
				</div>	
											

				<div class="col m12 s12">
					<div class="row">
						<div class="col m6 s6 mb-0">
							<div class="form-group">
								<label for="adult">Adult</label>
								<select v-model="bookAnewPackage.quantity" class="form-control">
									<option 
										v-for="quantity in 31" 
										value="{{ quantity }}"
										>
										{{ quantity }}
									</option>
								</select>
							</div>
						</div>

						<div class="col m6 s6 mb-0">
							<div class="form-group">
								<label for="child">Child</label>
								<select v-model="bookAnewPackage.child_quantity" class="form-control">
									<option 
										v-for="quantity in 31" 
										value="{{ quantity }}"
										>
										{{ quantity }}
									</option>
								</select>
							</div>
						</div>
					</div>
				</div>


				<div class="col m12 s12">
					<div class="form-group">
						<button type="submit" class="btn btn-large waves-effect waves-light full-width" :class="{ 'disabled' : ! buttonIsEnabled }">
							{{ buttonText }}
						</button>
					</div>
				</div>

			</div>
		</form>

	</div>

</template>


<script>
	export default {
		props: ['package'],
		data() {
			return {
				siteUrl: $('meta[name="site_url"]').attr('content'),
				token: $('meta[name="token"]').attr('content'),
				timings: [
					'8:30 AM', '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM',
					'01:00 PM', '01:30 PM', '02:00 PM', '02:30 PM', '03:00 PM', '03:30 PM', '04:00 PM', '04:30 PM', '05:00 PM',
					'05:30 PM', '06:00 PM', '06:30 PM', '07:00 PM', '07:30 PM', '08:00 PM', '08:30 PM', '09:00 PM', '09:30 PM',
					'10:00 PM', '10:30 PM', '11:00 PM', '11:30 PM'
				],
				bookedPackages: [],
				buttonText: 'Book Now',
				buttonIsEnabled: true,
				bookAnewPackage: {
					package_id: $('meta[name="package_id"]').attr('content'),
					date: '',
					date_submit: '',
					time: '',
					quantity: 1,
					child_quantity: 0
				}
			}
		},

		ready() {
			console.log(this.formRoute);
		},

		methods: {
			bookCurrentPackage() {
				this.buttonText = 'Processing...';
				this.buttonIsEnabled = false;

				if( this.bookAnewPackage.date == '' )
				{
					swal({
						title: "Eclipse Tourism",  
						text: "Please select your required date.",  
						type: "error", 
						timer: 3000,
						showConfirmButton: false
					});	

					this.resetButtonState();

					return;

				}

				if( this.bookAnewPackage.quantity < 1 )
				{

					swal({
						title: "Eclipse Tourism",  
						text: "Adult quantity must be greater than zero.",  
						type: "error", 
						timer: 3000,
						showConfirmButton: false
					});	

					this.resetButtonState();

					return;

				}				

				return this.$http.post(this.formRoute, this.bookAnewPackage).then(function(response) {
					this.bookedPackages.push(response.data);
					this.resetButtonState();

					swal({
						title: "Eclipse Tourism",  
						text: "The Package has been successfully added to your cart.",  
						type: "success", 
						timer: 5000,
						showConfirmButton: false
					});

				}, function(response) {
					swal({
						title: "Eclipse Tourism",  
						text: "There was some error in processing your request.",  
						type: "error", 
						timer: 3000,
						showConfirmButton: false
					});

					this.resetButtonState();
				});		
			},

			resetButtonState() {
				this.buttonText = 'Book Now';
				this.buttonIsEnabled = true;
			}
		},

		computed: {
			formRoute() {
				return this.package.confirm_availability ? this.siteUrl + 'booking' : this.siteUrl + 'cart';
			}
		}

	}

</script>	