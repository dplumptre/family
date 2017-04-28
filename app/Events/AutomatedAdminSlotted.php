<?php

namespace App\Events;

use App\Models\Receiver;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AutomatedAdminSlotted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var Receiver
     */
    public $receiver;

    /**
     * Create a new event instance.
     *
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        //
        $this->receiver = $receiver;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
