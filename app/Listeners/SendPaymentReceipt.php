<?php

namespace App\Listeners;

use App\Events\UserPurchasedAPackage;
use Eclipse\Mailers\UserMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPaymentReceipt
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
     * @param  UserPurchasedAPackage  $event
     * @return void
     */
    public function handle(UserPurchasedAPackage $event)
    {
        $this->mailer->sendPaymentReceipt($event->user, $event->booking_reference);
    }
}
