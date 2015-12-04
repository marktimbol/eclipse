<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Jobs\AddItemInCart;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\ShoppingCart\ShoppingCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;

    public function __construct(ShoppingCart $cart) {

        $this->cart = $cart;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart =  $this->cart->content();

        return view('public.cart.index', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        if( ! $request->date ) {

            flash()->error('Preferred Date!', 'Please select your preferred date.');
            
            return redirect()->back();
        }

        $this->dispatchFrom(AddItemInCart::class, $request);

        flash()->success(companyName(), 'The Packages has been successfully added to your cart.');

        return redirect()->route('cart.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {   
        $child_quantity = intval($request->child_quantity);

        if( $child_quantity < 0 ) {
            $child_quantity = 0;
        }

        $this->cart->update($rowId, [
            'options'   => [
                'child_quantity'    => $child_quantity
            ]
        ]);

        $this->cart->update($rowId, $request->adult_quantity);

        flash()->success(companyName(), 'You successfully updated an item from the cart.');

        return redirect()->route('cart.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        $this->cart->remove($rowId);

        flash()->success(companyName(), 'You successfully remove an item from the cart.');

        return redirect()->route('cart.index');
    }

}
