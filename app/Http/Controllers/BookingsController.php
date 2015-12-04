<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Jobs\AddItemInBooking;
use Eclipse\ShoppingCart\ShoppingCart;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    protected $cart;

    public function __construct(ShoppingCart $cart) {
        
        $this->cart = $cart;
    }
	
    public function index() {
		
        $cart =  $this->cart->contentBooking();

        return view('public.booking.index', compact('cart'));

	}

    public function store(Request $request) {	

        if( ! $request->date ) {

            flash()->error('Preferred Date!', 'Please select your preferred date.');
            
            return redirect()->back();
        }	

        $this->dispatchFrom(AddItemInBooking::class, $request);

        flash()->success(companyName(), 'The Packages has been successfully added to the booked items.');

        return redirect()->route('booking.checkout');

    }	

    public function update(Request $request, $rowId) {

        $child_quantity = intval($request->child_quantity);

        if( $child_quantity < 0 ) {
            $child_quantity = 0;
        }

        $this->cart->updateBooking($rowId, [
            'options'   => [
                'child_quantity'    => $child_quantity
            ]
        ]);

        $this->cart->updateBooking($rowId, $request->adult_quantity);

        flash()->success(companyName(), 'You successfully updated an item from the booking.');

        return redirect()->route('booking.index');

    }

    public function destroy($rowId) {

        $this->cart->removeBooking($rowId);

        flash()->success(companyName(), 'You successfully remove an item from the booking.');

        return redirect()->route('booking.index');

    }
}
