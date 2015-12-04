<?php

namespace App\Listeners\Admin;

use App\Events\UserBookedAPackage;
use Eclipse\Mailers\AdminMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendBookingNotification
{

    protected $mailer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(AdminMailer $mailer)
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
        $this->mailer->sendBookingNotification($event->user, $event->booking_reference);
    }
}
