<?php

namespace App\Events\Pairing;

use App\Models\Payer;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PairTimeElapsed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var Payer
     */
    private $payer;

    /**
     * Create a new event instance.
     *
     * @param Payer $payer
     */
    public function __construct(Payer $payer)
    {
        //
        $this->payer = $payer;
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
