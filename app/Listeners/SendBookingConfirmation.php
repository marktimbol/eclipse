<?php

namespace App\Listeners;

use App\Events\BookingWasConfirmed;
use Eclipse\Mailers\UserMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendBookingConfirmation
{
    
    protected $mailer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  BookingWasConfirmed  $event
     * @return void
     */
    public function handle(BookingWasConfirmed $event)
    {
        $this->mailer->sendBookingConfirmation($event->user_id, $event->booking_reference);
    }
}
