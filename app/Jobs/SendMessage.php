<?php

namespace App\Jobs;

use App\Events\UserSubmittedAnEnquiry;
use App\Jobs\Job;
use Eclipse\Repositories\Messages\MessageRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

class SendMessage extends Job implements SelfHandling
{
    public $name;

    public $email;

    public $phone;

    public $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(MessageRepositoryInterface $message)
    {
        $data = [
            'name'      => $this->name,
            'email'     => $this->email,
            'phone'     => $this->phone,
            'message'   => $this->message
        ];

        $inquiry = $message->store($data);

        event( new UserSubmittedAnEnquiry($inquiry) );
    }
}
