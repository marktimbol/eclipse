<?php

namespace App\Listeners\Admin;

use App\Events\UserPurchasedAPackage;
use Eclipse\Mailers\AdminMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPurchasedNotification
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
     * @param  UserPurchasedAPackage  $event
     * @return void
     */
    public function handle(UserPurchasedAPackage $event)
    {
        $this->mailer->sendPurchaseNotification($event->user, $event->booking_reference);
    }
}
