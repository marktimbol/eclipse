@extends('admin.layouts.admin')

@section('pageTitle', 'Categories')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1 class="page-header">Categories</h1>

            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>Name</th>
            			<th>&nbsp;</th>
            		</tr>	
            	</thead>

            	<tbody>
            		@forelse( $categories as $category )
            		<tr>
            			<td><a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a></td>
            			<td>
                            <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <a href="{{ route('admin.categories.edit', $category->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                <button type="submit" name="submit" class="btn btn-sm btn-link"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
            		</tr>
            		@empty
                        <td>No record yet. Please <a href="{{ route('admin.categories.create') }}">Add a new one</a></td>
            		@endforelse
            	</tbody>
            </table>
        </div>
    </div>
@endsection