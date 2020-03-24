<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Mail;

class SendUserRegisteredNotification
{
    /**
     * @param UserRegistered $event
     */
    public function handle(UserRegistered $event): void
    {
        Mail::to($event->user)->send(new \App\Mail\UserRegistered($event->user));
    }
}
