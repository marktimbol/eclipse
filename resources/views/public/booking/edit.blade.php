<div id="item{{ $item->rowid }}" class="modal">
	<div class="modal-content">
		<h4>{{ $item->name }}</h4>

		<form method="POST" action="{{ route('booking.update', $item->rowid) }}">
			{!! csrf_field() !!}
			{!! method_field('PUT') !!}
			
			@include('public.partials._cart-edit-quantity')

		</form>								
		
		<hr />

		<form method="POST" action="{{ route('booking.destroy', $item->rowid) }}">
			{!! csrf_field() !!}
			{!! method_field('DELETE') !!}

			<button type="submit" class="btn-flat center-content">
				<i class="material-icons">delete</i> Remove item
			</button>
		</form>								
	</div>
</div>