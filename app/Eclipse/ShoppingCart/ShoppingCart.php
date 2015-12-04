<?php

namespace Eclipse\ShoppingCart;

use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCart {

	/*=============== Cart Instance ===============*/

	public function add(array $content) {
		return Cart::instance('cart')->add($content);
	}

	public function content() {
		return Cart::instance('cart')->content();
	}

	public function total() {
		return Cart::instance('cart')->total();
	}

	public function count() {
		return Cart::instance('cart')->count(false);
	}

	public function update($rowId, $quantity) {
		return Cart::instance('cart')->update($rowId, $quantity);
	}

	public function remove($rowId) {
		Cart::instance('cart')->remove($rowId);
	}

	public function destroy() {
		Cart::instance('cart')->destroy();
	}

	/*=============== Booking Instance ===============*/

	public function addBooking(array $content) {
		return Cart::instance('booking')->add($content);
	}	
	
	public function contentBooking() {
		return Cart::instance('booking')->content();
	}	

	public function totalBooking() {
		return Cart::instance('booking')->total();
	}

	public function countBooking() {
		return Cart::instance('booking')->count(false);
	}	

	public function updateBooking($rowId, $quantity) {
		return Cart::instance('booking')->update($rowId, $quantity);
	}	

	public function removeBooking($rowId) {
		Cart::instance('booking')->remove($rowId);
	}	

	public function destroyBooking() {
		Cart::instance('booking')->destroy();
	}	

}