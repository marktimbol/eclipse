<?php

namespace App\Listeners;

use App\Events\UserBookedAPackage;
use Eclipse\Mailers\UserMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendBookingInformation
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
     * @param  UserBookedAPackage  $event
     * @return void
     */
    public function handle(UserBookedAPackage $event)
    {
        $this->mailer->sendBookingInformation($event->user, $event->booking_reference);
    }
}
