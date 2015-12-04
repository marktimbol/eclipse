<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Events\UserBookedAPackage;
use Eclipse\ShoppingCart\ShoppingCart;
use Illuminate\Contracts\Bus\SelfHandling;
use Eclipse\Repositories\User\UserRepositoryInterface;

class ProcessBookingOrder extends Job implements SelfHandling
{
    protected $name;

    protected $email;

    protected $phone;

    protected $address1;

    protected $address2;

    protected $city;

    protected $state;

    protected $country;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $address1, $address2, $city, $state, $country)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserRepositoryInterface $userRepo, ShoppingCart $cart) 
    {
        $data = [
            'name'      => $this->name,
            'email'     => $this->email,
            'phone'     => $this->phone,
            'address1'  => $this->address1,
            'address2'  => $this->address2,
            'city'      => $this->city,
            'state'     => $this->state,
            'country'   => $this->country
        ]; 

        $user = $userRepo->store($data);

        if( $user ) {
            /**
             * Save the data to "bookings" table
             */
            $booking = $user->bookings()->create([
                'booking_reference' => time(),
                'status'            => 0,
                'comments'          => ''
            ]); 

            foreach( $cart->contentBooking() as $item ) {

                $packageId = $item->options->package->id;
                $quantity = $item->qty;
                $child_quantity = $item->options->child_quantity;

                /**
                 * Save the data to "booking_details" table
                 */
                $booking->packages()->attach($packageId, [
                    'adult_quantity'    => $quantity,
                    'child_quantity'    => $child_quantity,
                    'date'              => $item->options->date,   //Day, Month Year
                    'date_submit'       => $item->options->date_submit, //YYYY-MM-DD
                    'time'              => $item->options->time ?: ''                    
                    ]);       
            }

            $cart->destroyBooking();

            event( new UserBookedAPackage($user, $booking->booking_reference) );


        } else {

            event( new UserBookingWasNotSuccessful($user) );
            
            /**
             * If payment is unsuccessful, delete the user to avoid duplicating his/her record on the "users" table
             */
            $userRepo->delete($user->id);

        }


    }
}
