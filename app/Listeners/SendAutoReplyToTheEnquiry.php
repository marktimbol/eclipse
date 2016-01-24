<?php

namespace App\Listeners;

use App\Events\UserSubmittedAnEnquiry;
use Eclipse\Mailers\UserMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAutoReplyToTheEnquiry
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
     * @param  UserSubmittedAnEnquiry  $event
     * @return void
     */
    public function handle(UserSubmittedAnEnquiry $event)
    {
        $this->mailer->sendAutoReplyToTheEnquiry($event->message);
    }
}
