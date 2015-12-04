@inject('cart', 'Eclipse\ShoppingCart\ShoppingCart')

@if($cart->count() > 0)

  <div class="fixed-action-btn">
    <a href="{{ route('cart.index') }}" class="btn-floating btn-large blue">
      <i class="large material-icons">shopping_cart</i>
    </a>
  </div>

@else

  <div class="fixed-action-btn">
    <a href="{{ route('packages') }}" class="btn-floating btn-large blue">
      <i class="fa fa-plus"></i>
    </a>
  </div>

@endif