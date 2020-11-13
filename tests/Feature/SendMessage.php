<?php

namespace Tests\Feature;

use App\Http\Livewire\SendMessage as LivewireSendMessage;
use App\Models\Messages;
use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class SendMessage extends TestCase
{

    public function test_send_message()
    {
        $user_recive = User::factory()->create();
        $user_sent = User::factory()->create();
        $this->actingAs($user_sent);

        Livewire::test(LivewireSendMessage::class,['userchat' => $user_recive['id'],'user' => $user_sent ])
        ->set('text','Test send message')
        ->call('sendMessage');

        $this->assertTrue(Messages::where('user_id',$user_sent['id'])->where('text','Test send message')->exists());
    }

    public function test_text_is_required(){
        $user_recive = User::factory()->create();
        $user_sent = User::factory()->create();
        $this->actingAs($user_sent);

        Livewire::test(LivewireSendMessage::class,['userchat' => $user_recive['id'],'user' => $user_sent])
        ->set('text','')
        ->call('sendMessage')
        ->assertHasErrors(['text' => 'required']);
    }

    public function test_emit_event_message_sent(){
        $user_recive = User::factory()->create();
        $user_sent = User::factory()->create();
        $this->actingAs($user_sent);

        Livewire::test(LivewireSendMessage::class,['userchat' => $user_recive['id'],'user' => $user_sent])
        ->set('text','Test send message')
        ->call('sendMessage')
        ->assertEmitted('messageSent');
    }
}
