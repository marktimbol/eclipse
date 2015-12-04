<?php

namespace App\Jobs;

use App\Jobs\Job;
use Eclipse\Billings\BillingGateway;
use App\Events\UserPurchasedAPackage;
use Eclipse\ShoppingCart\ShoppingCart;
use Illuminate\Contracts\Bus\SelfHandling;
use Eclipse\Repositories\User\UserRepositoryInterface;

class ProcessCartOrder extends Job implements SelfHandling
{
    protected $name;

    protected $email;

    protected $phone;

    protected $address1;

    protected $address2;

    protected $city;

    protected $state;

    protected $country;

    protected $token;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $address1, $address2, $city, $state, $country, $token)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(
        UserRepositoryInterface $userRepository, 
        BillingGateway $gateway,
        ShoppingCart $cart
    ) 
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

        $user = $userRepository->store($data);

        $chargeWasSuccessful = $gateway->charge($user, $cart->total(), $this->token);

        if( $chargeWasSuccessful ) {
            /**
             * Save the data to "bookings" table
             */
            $booking = $user->bookings()->create([
                'booking_reference' => bookingReference($chargeWasSuccessful),
                'status'            => 1,
                'comments'          => ''
            ]); 

            foreach( $cart->content() as $item ) {

                $packageId = $item->options->package->id;
                $adult_quantity = $item->qty;
                $child_quantity = $item->options->child_quantity;

                /**
                 * Save the data to "booking_details" table
                 */
                $booking->packages()->attach($packageId, [
                    'adult_quantity'    => $adult_quantity,
                    'child_quantity'    => $child_quantity,
                    'date'              => $item->options->date,   //Day, Month Year
                    'date_submit'       => $item->options->date_submit, //YYYY-MM-DD
                    'time'              => $item->options->time                    
                    ]);       
            }

            $cart->destroy();

            event( new UserPurchasedAPackage($user, $booking->booking_reference) );

        } else {

            event( new UserPurchaseWasNotSuccessful($user) );

            /**
             * If payment is not successful, delete the user to avoid duplicating his/her
             * record on the "users" table
             */
            $userRepository->delete($user->id);

        }

    }
}
