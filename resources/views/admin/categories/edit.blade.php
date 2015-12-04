@extends('admin.layouts.admin')

@section('pageTitle', 'Edit Category')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Edit Category</h1>

            <div class="row">
            	<div class="col-md-12">
            		
            		@include('errors.forms')

		            <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
		            	{!! method_field('PUT') !!}
		            	{!! csrf_field() !!}

		            	<div class="row">
		            		<div class="col-md-6">
				            	<div class="form-group">
				            		<label for="name">Name</label>
				            		<input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" placeholder="Category Name" />
				            	</div>
		            		</div>
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