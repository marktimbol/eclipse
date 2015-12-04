<?php

namespace App\Listeners;

use App\Events\UserPurchaseWasNotSuccessful;
use Eclipse\Mailers\UserMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPurchaseError
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
     * @param  UserPurchaseWasNotSuccessful  $event
     * @return void
     */
    public function handle(UserPurchaseWasNotSuccessful $event)
    {
        $this->mailer->sendPurchaseError($event->user);
    }
}
