<?php

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Broadcast;

>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
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

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
