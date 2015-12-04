<?php

namespace App\Jobs;

use App\Jobs\Job;
use Eclipse\Billings\BillingGateway;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

class ProcessBookingPayment extends Job implements SelfHandling
{
    protected $user_id;

    protected $booking_reference;

    protected $token;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id, $booking_reference, $token)
    {
        $this->user_id = $user_id;
        $this->booking_reference = $booking_reference;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(
        UserRepositoryInterface $userRepo, 
        BookingRepositoryInterface $bookingRepo,
        BillingGateway $gateway
    )
    {
        $user = $userRepo->find($this->user_id);

        $booking = $bookingRepo->findByReference($this->booking_reference);

        $bookedPackages = $booking->packages;

        $total = calculateTotalAmount($bookedPackages);

        $chargeWasSuccessful = $gateway->charge($user, $total, $this->token);

        if( $chargeWasSuccessful ) {

            $bookingRepo->update($booking->id, ['status' => 1]);

            //event( new UserPaidTheBooking($user) );

        } else {

            //event( new UserPurchaseWasNotSuccessful($user) );

            /**
             * If payment is not successful, delete the user to avoid duplicating his/her
             * record on the "users" table
             */
            //$userRepository->delete($user->id);

        }

    }
}
