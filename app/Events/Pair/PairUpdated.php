<?php

namespace App\Events\Pair;

use App\Models\Pair;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PairUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var Pair
     */
    public $pair;

    /**
     * Create a new event instance.
     *
     * @param Pair $pair
     */
    public function __construct(Pair $pair)
    {
        //
        $this->pair = $pair;
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
