<?php

use App\Events\BookingWasConfirmed;
use App\Events\UserBookedAPackage;
use App\Events\UserPurchasedAPackage;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Eclipse\ShoppingCart\ShoppingCart;
/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('purchase-check', function(UserRepositoryInterface $userRepo) {
		
	$user = $userRepo->find(5);

	$booking_reference = "1448455881";

	event( new UserPurchasedAPackage($user, $booking_reference) );

	return 'done';
});

Route::get('booking-check', function(UserRepositoryInterface $userRepo) {
		
	$user = $userRepo->find(6);

	$booking_reference = "1448535337";

	event( new UserBookedAPackage($user, $booking_reference) );

	return 'done';
});

Route::get('confirm-booking-check', function() {
		
	$booking_reference = "1448535337";

	$user_id = 6;

	event( new BookingWasConfirmed($user_id, $booking_reference) );

	return 'done';
});



Route::get('cart-instance', function(ShoppingCart $cart) {
	return $cart->content();
});

Route::get('booking-instance', function(ShoppingCart $cart) {
	return $cart->contentBooking();
});

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::post('change-currency', ['as' => 'change-currency', 'uses' => 'PagesController@changeCurrency']);

Route::get('deals', ['as' => 'deals', 'uses' => 'PagesController@deals']);
Route::get('tourist-information', ['as' => 'tourist-information', 'uses' => 'PagesController@touristInformation']);
Route::get('corporate', ['as' => 'corporate', 'uses' => 'PagesController@corporate']);
Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);

/*========= PACKAGES or TOURS =========*/
Route::get('category/{category}', ['as' => 'category', 'uses' => 'CategoriesController@getPackagesPerCategory']);
Route::get('packages', ['as' => 'packages', 'uses' => 'PackagesController@index']);
Route::get('package/{package}', ['as' => 'package', 'uses' => 'PackagesController@package']);

/*========= CART =========*/
Route::get('cart/checkout', ['as' => 'cart.checkout', 'uses' => 'BillingsController@getCartCheckout']);
Route::post('cart/checkout', ['as' => 'cart.checkout', 'uses' => 'BillingsController@cartCheckout']);
Route::get('cart/checkout/success', ['as' => 'cart.checkout.success', 'uses' => 'BillingsController@cartCheckoutSuccess']);

Route::resource('cart', 'CartController');

/*========= BOOKING =========*/
Route::get('booking/checkout', ['as' => 'booking.checkout', 'uses' => 'BillingsController@getBookingCheckout']);
Route::post('booking/checkout', ['as' => 'booking.checkout', 'uses' => 'BillingsController@bookingCheckout']);
Route::get('booking/checkout/success', ['as' => 'booking.checkout.success', 'uses' => 'BillingsController@bookingCheckoutSuccess']);

Route::get('booking/{booking_reference}/payment', ['as' => 'booking.payment', 'uses' => 'BillingsController@getBookingPayment']);
Route::put('booking/{booking_reference}/payment', ['as' => 'booking.payment', 'uses' => 'BillingsController@bookingPayment']);
Route::get('booking/{booking_reference}/payment/success', ['as' => 'booking.payment.success', 'uses' => 'BillingsController@getBookingPaymentSuccess']);

Route::resource('booking', 'BookingsController');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('auth/login', 'AuthController@login');
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@logout');

Route::get('auth/register', 'AuthController@register');
Route::post('auth/register', 'AuthController@postRegister');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	
	Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\AdminController@home']);
	
	Route::put('packages/photos/upload', [
				'as' => 'admin.packages.photos.upload', 
				'uses' => 'Admin\PhotosController@uploadPackagePhoto'
			]);	

	Route::delete('packages/photos/delete/{path}', [
				'as' => 'admin.packages.photos.delete', 
				'uses' => 'Admin\PhotosController@deletePackagePhoto'
			]);		
	
	Route::resource('categories', 'Admin\CategoriesController');

	Route::resource('packages', 'Admin\PackagesController');

	Route::post('bookings/{booking_reference}/user/{user_id}/confirm', ['as' => 'bookings.confirm', 'uses' => 'Admin\BookingsController@confirm']);

	Route::resource('bookings', 'Admin\BookingsController');
	
});

