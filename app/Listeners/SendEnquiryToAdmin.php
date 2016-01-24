<?php

namespace App\Listeners;

use App\Events\UserSubmittedAnEnquiry;
use Eclipse\Mailers\AdminMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEnquiryToAdmin
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
     * @param  UserSubmittedAnEnquiry  $event
     * @return void
     */
    public function handle(UserSubmittedAnEnquiry $event)
    {
        $this->mailer->sendEnquiry($event->message);
    }
}
