<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\BookingCheckoutRequest;
use App\Http\Requests\BookingPaymentCheckoutRequest;
use App\Http\Requests\CartCheckoutRequest;
use App\Jobs\ProcessBookingOrder;
use App\Jobs\ProcessBookingPayment;
use App\Jobs\ProcessCartOrder;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\ShoppingCart\ShoppingCart;
use Illuminate\Http\Request;

class BillingsController extends Controller
{

	protected $cart;

    protected $booking;

	public function __construct(ShoppingCart $cart, BookingRepositoryInterface $booking) {

		$this->cart = $cart;

        $this->booking = $booking;
	
    }

    public function getCartCheckout() {

        $cart =  $this->cart->content();

    	return view('public.cart.checkout', compact('cart'));
    }

    public function cartCheckout(CartCheckoutRequest $request) {

        $this->dispatchFrom(ProcessCartOrder::class, $request);

        flash()->overlay( companyName(), 'You have successfully booked the Package. Please check your email.');

        return redirect()->route('cart.checkout.success');
    }

    public function cartCheckoutSuccess() {

        return view('public.checkout-success');
    
    }

    public function getBookingCheckout() {

        $cart =  $this->cart->contentBooking();

        return view('public.booking.checkout', compact('cart'));
    }

    public function bookingCheckout(BookingCheckoutRequest $request) {

        $this->dispatchFrom(ProcessBookingOrder::class, $request);

        flash()->overlay( companyName(), 'You have successfully booked the Package. Please check your email.');

        return redirect()->route('booking.checkout.success');
    }

    public function bookingCheckoutSuccess() {

        return view('public.booking.booking-payment-success');
    
    }

    public function getBookingPayment($booking_reference) {
        
        $booking = $this->booking->findByReference($booking_reference);

        $packages = $booking->packages;

        return view('public.booking.booking-payment', compact('booking', 'packages'));

    }   

    public function bookingPayment(BookingPaymentCheckoutRequest $request) {

        $this->dispatchFrom( ProcessBookingPayment::class, $request);

        flash()->overlay( companyName(), 'You have successfully paid your booking. Please check your email.'); 

        return redirect()->route('booking.payment.success', $request->booking_reference);
    }     

    public function getBookingPaymentSuccess() {

        return view('public.booking.booking-payment-success');
    
    }        


}
