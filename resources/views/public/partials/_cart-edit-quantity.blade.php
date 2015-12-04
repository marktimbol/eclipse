			<div class="row">
				<div class="col s6 m3">
					<div class="form-group">
						<label for="quantity">Adult Quantity:</label>

						<div class="input-with-price">
							<input type="number" name="adult_quantity" class="form-control item-quantity" value="{{ $item->qty }}" size="5" max="100" />
							<span>
								&times;
								{!! convertedAmountWithCurrency($item->options->package->adult_price) !!}
							</span>
						</div>
					</div>
				</div>

				<div class="col s6 m3">
					<div class="form-group">
						<label for="quantity">Child Quantity:</label>

						<div class="input-with-price">
							<input type="number" name="child_quantity" class="form-control item-quantity" value="{{ $item->options->child_quantity }}" size="5" max="100" />
							<span>
								&times;
								{!! convertedAmountWithCurrency($item->options->package->child_price) !!}
							</span>
						</div>
					</div>	
				</div>

				<div class="col s6 m3">
					<div class="form-group">
						<div class="form-group">
							<label for="quantity">&nbsp;</label>
							<button type="submit" class="btn waves-effect waves-light">
								Update Item
							</button>
						</div>	
					</div>	
				</div>										
			</div>