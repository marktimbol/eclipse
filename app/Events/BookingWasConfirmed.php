<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BookingWasConfirmed extends Event
{
    use SerializesModels;

    public $user_id;

    public $booking_reference;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id, $booking_reference)
    {
        $this->user_id = $user_id;

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
