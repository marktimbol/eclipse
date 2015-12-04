<?php

namespace App\Events;

use App\User;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserBookedAPackage extends Event
{
    use SerializesModels;

    public $user;

    public $booking_reference;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $booking_reference)
    {
        $this->user = $user;

        $this->booking_reference = $booking_reference;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
