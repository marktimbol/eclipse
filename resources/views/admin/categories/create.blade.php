@extends('admin.layouts.admin')

@section('pageTitle', 'Add New Category')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Add New Category</h1>

            <div class="row">
            	<div class="col-md-12">
            		
            		@include('errors.forms')

		            <form method="POST" action="{{ route('admin.categories.store') }}">
		            	{!! csrf_field() !!}

		            	<div class="row">
		            		<div class="col-md-6">
				            	<div class="form-group">
				            		<label for="name">Name</label>
				            		<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Package Name" />
				            	</div>
		            		</div>
		            	</div>

		            	<div class="form-group">
		            		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Record</button>
		            	</div>
		            </form>
            	</div>
            </div>
        </div>
    </div>
@endsection