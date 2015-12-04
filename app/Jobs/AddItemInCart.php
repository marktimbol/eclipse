<?php

namespace App\Jobs;

use App\Jobs\Job;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\ShoppingCart\ShoppingCart;
use Illuminate\Contracts\Bus\SelfHandling;

class AddItemInCart extends Job implements SelfHandling
{
    public $package_id;

    public $quantity;

    public $child_quantity;

    public $date;

    public $date_submit;

    public $time;

    public function __construct($package_id, $quantity, $child_quantity, $date, $date_submit, $time = '') {

        $this->package_id = $package_id;
        $this->quantity = $quantity;
        $this->child_quantity = $child_quantity;
        $this->date = $date;
        $this->date_submit = $date_submit;
        $this->time = $time;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PackageRepositoryInterface $package, ShoppingCart $cart)
    {
        $selectedPackage = $package->find($this->package_id);
        
        $cart->add([
            'id'            => $selectedPackage->id,
            'name'          => $selectedPackage->name,
            'qty'           => (int) $this->quantity, //adult_quantity
            'price'         => $selectedPackage->adult_price,     //adult_price
            'options'       => [
                'child_quantity'        => $this->child_quantity,
                'date'                  => $this->date,
                'date_submit'           => $this->date_submit,
                'time'                  => $this->time ?: '',
                //package option should be required, we're getting the child_price from
                //here to compute the subtotal
                'package'               => $selectedPackage 
            ]
        ]);
    }
}
