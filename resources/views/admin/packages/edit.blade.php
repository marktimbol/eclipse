@extends('admin.layouts.admin')

@section('pageTitle', 'Edit Package')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Edit Package</h1>

            <div class="row">
            	<div class="col-md-12">
            		
            		@include('errors.forms')

		            <form method="POST" action="{{ route('admin.packages.update', $package->id) }}">
		            	{!! method_field('PUT') !!}
		            	{!! csrf_field() !!}

		            	<div class="row">
		            		<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="name">Name</label>
				            		<input type="text" name="name" id="name" class="form-control" value="{{ $package->name }}" placeholder="Package Name" />
				            	</div>
		            		</div>

		            		<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="subtitle">Subtitle</label>
				            		<input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ $package->subtitle }}" placeholder="Action Packed Off Road Exploring" />
				            	</div>
		            		</div>

		            		<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="category">Category</label>
				            		<select name="category_id" id="category" class="form-control">
				            			<option value=""></option>
				            			@foreach( $categories as $category )
				            				<option value="{{ $category->id }}"
				            					{{ ($category->id == $package->category->id) ? ' selected' : '' }}
				            				>
				            					{{ $category->name }}
				            				</option>
				            			@endforeach
				            		</select>
				            	</div>
		            		</div>            		
		            	</div>		            	

		            	<div class="row">
		            		<div class="col-md-6">
		            			<div class="row">
		            				<div class="col-md-4">
						            	<div class="form-group">
						            		<label for="departs">Departs</label>
						            		<input type="text" name="departs" id="departs" class="form-control" value="{{ $package->departs }}" placeholder="Departs" />
						            	</div>	
		            				</div>

		            				<div class="col-md-4">
						            	<div class="form-group">
						            		<label for="returns">Returns</label>
						            		<input type="text" name="returns" id="returns" class="form-control" value="{{ $package->returns }}" placeholder="Returns" />
						            	</div>	
		            				</div>

		            				<div class="col-md-4">
						            	<div class="form-group">
						            		<label for="duration">Duration</label>
						            		
						            		<input type="text" name="duration" id="duration" class="form-control" value="{{ $package->duration }}" placeholder="Duration" />
						            		
						            	</div>	
		            				</div>
		            			</div>
		            		</div>
		            		<div class="col-md-6">
		            			<div class="row">
		            				<div class="col-md-6">
						            	<div class="form-group">
						            		<label for="adult_price">Adult Price</label>
						            		<div class="input-group">
						            			
						            			<input type="text" name="adult_price" id="adult_price" class="form-control" value="{{ $package->adult_price }}" placeholder="Adult Price" />
						            			<div class="input-group-addon">AED</div>
						            		</div>
						            	</div>
		            				</div>

		            				<div class="col-md-6">
						            	<div class="form-group">
						            		<label for="child_price">Child Price</label>
						            		<div class="input-group">
						            			<input type="text" name="child_price" id="child_price" class="form-control" value="{{ $package->child_price }}" placeholder="Child Price" />
						            			<div class="input-group-addon">AED</div>
						            		</div>
						            	</div>
		            				</div>
		            			</div>
		            		</div>
		            	</div>

		            	<div class="form-group">
		            		<label for="description">Description</label>
		            		<textarea name="description" id="description" class="form-control ckeditor" placeholder="Package Description" rows="10">
		            			{{ $package->description }}
		            		</textarea>
		            	</div>

		            	<div class="checkbox">
		            		<label>
		            			<input type="checkbox" 
		            				name="has_time_options" 
		            				value="1"
		            				{{ $package->has_time_options == 1 ? 'checked' : '' }}
		            			>
		            			Allow customer to select their timings during booking.
		            		</label>
		            	</div>			            	

		            	<div class="checkbox">
		            		<label>
		            			<input type="checkbox"
		            				name="confirm_availability" 
		            				value="1"
		            				{{ $package->confirm_availability == 1 ? 'checked' : '' }}
		            			>
		            			This package is subject for availability. Once the availability is confirmed, we will send them an email with a link to enter their Debit / Credit Card information so that we charge them.
		            		</label>
		            	</div>			  

		            	<hr />

		            	<div class="form-group">
		            		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Record</button>
		            	</div>
		            </form>
            	</div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')
	<script src="http://cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
@endsection