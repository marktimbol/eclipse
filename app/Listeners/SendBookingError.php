<?php

namespace App\Listeners;

use App\Events\UserBookingWasNotSuccessful;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBookingError
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
     * @param  UserBookingWasNotSuccessful  $event
     * @return void
     */
    public function handle(UserBookingWasNotSuccessful $event)
    {
        $this->mailer->sendBookingError($event->user);
    }
}
