<?php

namespace Tests\Feature;

use App\Events\SendMessage;
use App\Models\User;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class EventSendMessage extends TestCase
{
    public function test_if_event_send_message_is_dispatched()
    {
        $user = User::factory()->create();
        Event::fake();
        
        event(new SendMessage($user->id,'Hellow world'));

        Event::assertDispatched(SendMessage::class);
    }

    public function test_if_not_event_send_message_is_dispatched()
    {
        Event::fake();

        // Assert an event was not dispatched...
        Event::assertNotDispatched(SendMessage::class);
    }
}
