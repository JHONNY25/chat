<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Writing implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_name;
    public $user_current;

    public function __construct($user_name = null,$user_current = null)
    {
        $this->user_name = $user_name;
        $this->user_current = $user_current;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('livechat-channel');
    }

    public function broadcastAs()
    {
        return 'writing';
    }
}
