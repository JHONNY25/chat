<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('livechat-channel', function ($user) {
    return Auth::user();
});

Broadcast::channel('chat.{chatid}', function ($user, $chatid) {
    return $user->id;
});

Broadcast::channel('online-chat', function ($user) {
    if (auth()->check()) {
        return $user->id;
    }
});
